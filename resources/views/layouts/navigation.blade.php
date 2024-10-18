<ul>
    <li class="nav-item @if(request()->routeIs('home')) active @endif">
        <a href="{{ route('home') }}">
              <span class="icon">
                <svg width="22" height="22" viewBox="0 0 22 22">
                  <path
                          d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z"
                  />
                </svg>
              </span>
            <span class="text">{{ __('Dashboard') }}</span>
        </a>
    </li>

    {{-- <li class="nav-item @if(request()->routeIs('users.index')) active @endif">
        <a href="{{ route('users.index') }}">
              <span class="icon">
                <svg width="22" height="22" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
              </span>
            <span class="text">{{ __('Users') }}</span>
        </a>
    </li>

    <li class="nav-item @if(request()->routeIs('about')) active @endif">
        <a href="{{ route('about') }}">
            <span class="icon">
                <svg width="22" height="22" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                </svg>
            </span>
            <span class="text">{{ __('About us') }}</span>
        </a>
    </li> --}}

    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#ddmenu_1"
           aria-controls="ddmenu_1" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="lni lni-restaurant"></i>
            </span>
            <span class="text">Supplier</span>
        </a>
        <ul id="ddmenu_1" class="dropdown-nav collapse" style="">
            <li>
                <a href="{{ route('supplier') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('supplier.stock.view') }}">Stocks</a>
            </li>
            <li>
                <a href="{{ route('supplier.add.stock.view') }}">Add Stock</a>
            </li>
        </ul>
    </li>

    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
           aria-controls="ddmenu_2" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="lni lni-home"></i>
            </span>
            <span class="text">Inventory</span>
        </a>
        <ul id="ddmenu_2" class="dropdown-nav collapse" style="">
            <li>
                <a href="{{ route('inventory') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('inventory.request') }}">Request Stocks</a>
            </li>
            <li>
                <a href="{{ route('inventory.stock') }}">Stocks</a>
            </li>
        </ul>
    </li>

    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#ddmenu_3"
           aria-controls="ddmenu_3" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="lni lni-money-protection"></i>
            </span>
            <span class="text">Finance</span>
        </a>
        <ul id="ddmenu_3" class="dropdown-nav collapse" style="">
            <li>
                <a href="{{ route('finance') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('finance.request') }}">Requests</a>
            </li>
            <li>
                <a href="{{ route('generate.report') }}">Generate Report</a>
            </li>
        </ul>
    </li>
    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#marketing"
           aria-controls="marketing" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="lni lni-invest-monitor"></i>
            </span>
            <span class="text">Marketing</span>
        </a>
        <ul id="marketing" class="dropdown-nav collapse" style="">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a href="#">Email marketing</a>
            </li>
            <li>
                <a href="#">Customer support</a>
            </li>
        </ul>
    </li>
    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#hr"
           aria-controls="hr" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="lni lni-grow"></i>
            </span>
            <span class="text">Human Resource</span>
        </a>
        <ul id="hr" class="dropdown-nav collapse" style="">
            <li>
                <a href="{{ route('hr') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('hr.employees') }}">Employees</a>
            </li>
            <li>
                <a href="#">Online Applicant</a>
            </li>
            <li>
                <a href="#">Salary</a>
            </li>
        </ul>
    </li>
    <li class="nav-item nav-item-has-children">
        <a class="collapsed" href="#0" class="" data-bs-toggle="collapse" data-bs-target="#loans"
           aria-controls="loans" aria-expanded="true" aria-label="Toggle navigation">
            <span class="icon">
                <i class="lni lni-coin"></i>
            </span>
            <span class="text">Loans</span>
        </a>
        <ul id="loans" class="dropdown-nav collapse" style="">
            <li>
                <a href="#">Loans</a>
            </li>
            <li>
                <a href="#">Loan form</a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="#">
              <span class="icon">
                <i class="lni lni-comments"></i>
              </span>
            <span class="text">{{ __('Chats') }}</span>
        </a>
    </li>
</ul>
