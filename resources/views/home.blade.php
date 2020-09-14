@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.ftun12-1.fna.fbcdn.net/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=instagram.ftun12-1.fna.fbcdn.net&_nc_ohc=Bx-TAUyNgPgAX-t5vCn&oh=72ed3c4c2c9c0c8136fecaf340a1ddf1&oe=5F861667" class="rounded-circle" />
        </div>

        <div class="col-9 pt-5">
            <div>
                <h1> {{$user->username}}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>324</strong> posts </div>
                <div class="pr-5"><strong>55.9k</strong> followers</div>
                <div class="pr-5"><strong>281</strong> following</div>
            </div>    

            <div class="pt-4 font-weight-bold"> freeCodeCamp </div>
            <div>
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            <div>
                <a href="/"> freecodecamp.org </a>
            </div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.ftun12-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.111.928.928a/s640x640/119049151_1045184425936383_2869652952601972349_n.jpg?_nc_ht=instagram.ftun12-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=1Y-9yskZQlgAX_2md_C&amp;oh=03231fe0a44f81b8d0506bc43de45fe4&amp;oe=5F88025F" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.ftun12-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.90.901.901a/s640x640/118989879_349217769449512_4959720715070608894_n.jpg?_nc_ht=instagram.ftun12-1.fna.fbcdn.net&_nc_cat=104&_nc_ohc=b3D2fELyNeoAX9IeQS6&oh=df865c8227822fa24c0f5e704c22f61d&oe=5F870BEA" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.ftun12-1.fna.fbcdn.net/v/t51.2885-15/e35/c95.0.560.560a/118614410_230664505046765_5604987870734821551_n.jpg?_nc_ht=instagram.ftun12-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=AfiKfQIlmdMAX-8e00o&oh=a363817928f750e6026be43250d16df2&oe=5F86AFAB" class="w-100">
        </div>
    </div>

</div>
@endsection
