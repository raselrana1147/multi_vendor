this seller page

 <a class="dropdown-item dropdown-footer" href="#" role="button" onclick="event.preventDefault();
          document.getElementById('logout-form-admin').submit();"><i class="fas fa-sign-out-alt"></i> Sign out</a>
          <form id="logout-form-admin" action="{{ route('seller.logout') }}" method="POST" class="d-none">
              @csrf
          </form>