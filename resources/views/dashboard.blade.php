@can('edit posts')
    <a href="">Edit Post</a>
@else
    <span>You don’t have permission to edit this post.</span>
@endcan

@can('view posts')
    <a href="">View Post</a>
@endcan
