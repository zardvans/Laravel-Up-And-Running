<div class="content" data-page-name="{{ $pageName }}">
    <p>Here's why you should sign up for our app: <strong>It's great.</strong></p>

    @include('sign-up-button', ['text' => 'See just how great it is!'])
    @includeIf('sidebars.admin', ['some' => 'data'])
    @includeWhen($user->isAdmin(), 'sidebars.admin', ['some' => 'data'])
    @includeFirst(['custom.header', 'header'], ['some' => 'data'])
    @include('partials.modal', ['title' => 'Insecure password', 'content' => 'Password does not comply with our security requirements.'])
    <x-modal-two title="Insecure password Two" :content="'Password does not comply with our security requirements two.'" />
</div>
