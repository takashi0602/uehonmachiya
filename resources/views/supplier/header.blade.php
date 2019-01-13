<div class="d-flex py-2">
  <ul class="nav mr-auto">
    <li class="nav-item">
      <span class="nav-link h3">{{ $supplier_name }}</span>
    </li>
  </ul>
  <ul class="nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('') }}">ユーザ情報</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/supplier/ordering') }}">発注一覧</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/supplier/shipped') }}">出庫済み一覧</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('/supplier/logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">ログアウト
      </a>
      <form id="logout-form" action="{{ url('/supplier/logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </li>

  </ul>
</div>