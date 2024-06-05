<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Invoice as InvoiceModel;

class Invoice extends Notification implements ShouldQueue
{
    use Queueable;
    private $invoiceId;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $invoice = InvoiceModel::findOrFail($this->invoiceId);
        $url1 = url('/invoices/'.$this->invoiceId);
        $url2 = url('/invoices2/'.$this->invoiceId);

        if ($invoice->status === 'paid') {
            return (new MailMessage)                 
                        ->subject('Your Invoice - Payment Received')
                        ->line('Thank you for your payment. Please find your invoice attached.')
                        ->action('View Invoice', $url1)
                        ->line('We appreciate your business!');
        } else {
            return (new MailMessage)                 
                        ->subject('Your Invoice - Payment on Arrival')
                        ->line('You have chosen to pay on arrival. Please find your invoice details below.')
                        ->action('View Invoice', $url2)
                        ->line('We look forward to serving you!');
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
