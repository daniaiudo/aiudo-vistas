<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vistas');
});

Route::get('/vistas_aiudo/signature', function () {
    return view('erp.employee.signature');
});

Route::get('/vistas_aiudo/invoice', function () {
    return view('html-to-pdf.invoice');
});

Route::get('/vistas_aiudo/needs_assessment', function () {
    return view('html-to-pdf.needs_assessment');
});

Route::get('/vistas_aiudo/payroll', function () {
    return view('html-to-pdf.payroll');
});

Route::get('/vistas_aiudo/registration', function () {
    return view('mail.carer.registration');
});

Route::get('/vistas_aiudo/welcome', function () {
    return view('mail.carer.welcome');
});

Route::get('/vistas_aiudo/carer_available_update_plain', function () {
    return view('mail.crm.carers.carer_available_update_plain');
});

Route::get('/vistas_aiudo/carer_available_update', function () {
    return view('mail.crm.carers.carer_available_update');
});

Route::get('/vistas_aiudo/recruiter-profile-mail', function () {
    return view('mail.crm.carers.recruiter-profile-mail');
});

Route::get('/vistas_aiudo/issued_invoice', function () {
    return view('mail.invoices.issued_invoice');
});

Route::get('/vistas_aiudo/accept', function () {
    return view('mail.needs_assessment.accept');
});

Route::get('/vistas_aiudo/reject', function () {
    return view('mail.needs_assessment.reject');
});

Route::get('/vistas_aiudo/reminder', function () {
    return view('mail.needs_assessment.reminder');
});

Route::get('/vistas_aiudo/resend', function () {
    return view('mail.payroll.resend');
});

Route::get('/vistas_aiudo/draft-created-employers-bihar', function () {
    return view('mail.payroll_batch.draft-created-employers-bihar');
});

Route::get('/vistas_aiudo/draft-created-employers', function () {
    return view('mail.payroll_batch.draft-created-employers');
});

Route::get('/vistas_aiudo/draft-created', function () {
    return view('mail.payroll_batch.draft-created');
});

Route::get('/vistas_aiudo/draft-updated', function () {
    return view('mail.payroll_batch.draft-updated');
});

Route::get('/vistas_aiudo/employer-registration-gathering-bihar', function () {
    return view('mail.procedures.employer-registration-gathering-bihar');
});

Route::get('/vistas_aiudo/employer-registration-gathering', function () {
    return view('mail.procedures.employer-registration-gathering');
});

Route::get('/vistas_aiudo/employer-registration-signature-bihar', function () {
    return view('mail.procedures.employer-registration-signature-bihar');
});

Route::get('/vistas_aiudo/employer-registration-signature', function () {
    return view('mail.procedures.employer-registration-signature');
});

Route::get('/vistas_aiudo/employer-registration-success-bihar', function () {
    return view('mail.procedures.employer-registration-success-bihar');
});

Route::get('/vistas_aiudo/employer-registration-success', function () {
    return view('mail.procedures.employer-registration-success');
});

Route::get('/vistas_aiudo/employment-registration-gathering-bihar', function () {
    return view('mail.procedures.employment-registration-gathering-bihar');
});

Route::get('/vistas_aiudo/employment-registration-gathering', function () {
    return view('mail.procedures.employment-registration-gathering');
});

Route::get('/vistas_aiudo/employment-registration-signature-bihar', function () {
    return view('mail.procedures.employment-registration-signature-bihar');
});

Route::get('/vistas_aiudo/employment-registration-signature', function () {
    return view('mail.procedures.employment-registration-signature');
});

Route::get('/vistas_aiudo/employment-registration-success-bihar', function () {
    return view('mail.procedures.employment-registration-success-bihar');
});

Route::get('/vistas_aiudo/employment-registration-success', function () {
    return view('mail.procedures.employment-registration-success');
});

Route::get('/vistas_aiudo/employment-termination-signature-bihar', function () {
    return view('mail.procedures.employment-termination-signature-bihar');
});

Route::get('/vistas_aiudo/employment-termination-signature', function () {
    return view('mail.procedures.employment-termination-signature');
});

Route::get('/vistas_aiudo/employment-termination-success-bihar', function () {
    return view('mail.procedures.employment-termination-success-bihar');
});

Route::get('/vistas_aiudo/employment-termination-success', function () {
    return view('mail.procedures.employment-termination-success');
});

Route::get('/vistas_aiudo/employment-variation-signature-bihar', function () {
    return view('mail.procedures.employment-variation-signature-bihar');
});

Route::get('/vistas_aiudo/employment-variation-signature', function () {
    return view('mail.procedures.employment-variation-signature');
});

Route::get('/vistas_aiudo/employment-variation-success-bihar', function () {
    return view('mail.procedures.employment-variation-success-bihar');
});

Route::get('/vistas_aiudo/employment-variation-success', function () {
    return view('mail.procedures.employment-variation-success');
});

Route::get('/vistas_aiudo/procedure-approve', function () {
    return view('mail.procedures.procedure-approve');
});

Route::get('/vistas_aiudo/procedure-reject', function () {
    return view('mail.procedures.procedure-reject');
});

Route::get('/vistas_aiudo/procedure-reminder-mail-data-gathering', function () {
    return view('mail.procedures.procedure-reminder-mail-data-gathering');
});

Route::get('/vistas_aiudo/procedure-reminder-mail', function () {
    return view('mail.procedures.procedure-reminder-mail');
});

Route::get('/vistas_aiudo/procedure-sad', function () {
    return view('mail.procedures.procedure-sad');
});

Route::get('/vistas_aiudo/mail', function () {
    return view('mail.profile_submission.mail');
});

Route::get('/vistas_aiudo/profile', function () {
    return view('mail.profile_submission.profile');
});

Route::get('/vistas_aiudo/new', function () {
    return view('mail.quote.new');
});

Route::get('/vistas_aiudo/paid', function () {
    return view('mail.quote.paid');
});

Route::get('/vistas_aiudo/paidSAD', function () {
    return view('mail.quote.paidSAD');
});

Route::get('/vistas_aiudo/sad', function () {
    return view('mail.quote.sad');
});

Route::get('/vistas_aiudo/call_request', function () {
    return view('mail.system.call_request');
});

Route::get('/vistas_aiudo/service_closed_alert', function () {
    return view('mail.system.service_closed_alert');
});

Route::get('/vistas_aiudo/service_paused_alert', function () {
    return view('mail.system.service_paused_alert');
});

Route::get('/vistas_aiudo/carers', function () {
    return view('mail.carers');
});

Route::get('/vistas_aiudo/errorCreateFamily', function () {
    return view('mail.errorCreateFamily');
});




