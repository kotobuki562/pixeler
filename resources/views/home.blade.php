<head>
  <title>Laravel Sample</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>ようこそ、{{ Auth::user()->name }}さん！</h2>
                    <h3>連絡先：<a href="email:{{ Auth::user()->email }}">{{ Auth::user()->email }}</a></h3>
                    <button form="logout-button" class="dropdown-item" type="submit">
                        <a href="{{ url('/book') }}">Book</a>
                    </button>
                    
                    <button form="logout-button" class="dropdown-item" type="submit">
                        ログアウト
                    </button>
                    <form id="logout-button" method="POST" action="{{ route('logout') }}">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
