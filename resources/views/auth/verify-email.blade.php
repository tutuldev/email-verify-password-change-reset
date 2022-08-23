<h2 class="bg-green">resend your email</h2>
<form class="d-inline" method="POST" action="{{ route('verification.send') }}">
    @csrf
    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
</form>
