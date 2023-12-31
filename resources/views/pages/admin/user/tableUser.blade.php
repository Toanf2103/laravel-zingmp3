<div class="row card">
    <table class="table table-user align-middle">
        <thead>
            <tr>
                <th scope="col">Avatar</th>
                <th scope="col">Tên</th>
                <th scope="col">Username</th>

                <th scope="col">Trạng thái</th>
                <th scope="col">Follower</th>
                <th scope="col">Slug</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listUser as $user)
            <tr>
                <th>
                    <div class="avatar-radius">
                        <img src="{{ $user->avatar }}" alt="">
                    </div>
                </th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td class="status-user">
                    @if($user->status)
                    <span class="badge bg-success" onclick="toggleStatusUser('{{ $user->id }}','{{ $user->name }}',0)">Hoạt động</span>
                    @else
                    <span class="badge bg-danger" onclick="toggleStatusUser('{{ $user->id }}','{{ $user->name }}',1)">Khoá</span>
                    @endif
                </td>
                <td>{{$user->total_followers}}</td>
                <td><a href="{{ route('site.artist.home',['aritistSlug'=>$user->slug] ) }}" target="_blank">{{ $user->slug }}</a></td>
                <td>
                    <a href="{{ route('admin.user.detail',['user'=>$user]) }}" class="wrapper-icon bg-primary">
                        <i class="fa-solid fa-user-pen"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginations">
        {{ $listUser->withQueryString()->links('partials.paginateAdminCustom') }}
    </div>

</div>