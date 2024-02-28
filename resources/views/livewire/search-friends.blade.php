<div>
    <ul>
        <li class="chats-add">
        <h4>Chats<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#add-contact"><i class="feather-plus"></i></a></h4>
        </li>
        <li>
        <div class="side-nav-search">
        <form>
        <input type="text" wire:model.live="search" name="search" class="form-control" placeholder="Search here">
        <a class="btn"><i class="feather-search"></i></a>
        </form>
        </div>
        </li>
        <li>
        <div class="chat-user-actives">
            @foreach ($users as $user)
            <a href="{{ route('chats') }}" class="d-flex align-items-center">
           
                <div class="chat-call-user">
                <img src="assets/img/profiles/avatar-02.jpg" alt="img">
                <span class="active-users bg-green"></span>
                </div>
                <div class="chat-users-recent">
                <div class="recent-user-titles d-flex">
                <h5>{{ $user->name }}</h5>
                </div>
                </div>
                </a> 
            @endforeach
       
        </div>
        </li>
        <li>
       
        </li>
        <li>
       
        </li>
        <li>
        </li>
        <li>
        </li>
        </ul>
</div>
