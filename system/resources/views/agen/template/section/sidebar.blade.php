<div class="brand-logo">
    <a href="{{url('agen')}}">
        <img src="{{url('gaskite.png')}}" alt="" class="light-logo">
    </a>
    <div class="close-sidebar" data-toggle="left-sidebar-close">
        <i class="ion-close-round"></i>
    </div>
</div>
<div class="menu-block customscroll">
    <div class="sidebar-menu">
        <ul id="accordion-menu">
            <li>
                <a href="{{url('agen')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
                </a>
            </li>
            <li>
                <a href="{{url('agen/user')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-user-1"></span><span class="mtext">User</span>
                </a>
            </li>
            <li>
                <a href="{{url('agen/pangkalan')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-id-card1"></span><span class="mtext">Data Pangkalan</span>      
                </a>
            </li>
            {{-- <li>
                <a href="{{url('agen/pangkalan')}}" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-profits"></span><span class="mtext">Laporan Transaksi</span>      
                </a>
            </li> --}}
            
            {{-- <li>
                <a href="" class="dropdown-toggle no-arrow">
                    <span class="micon dw dw-user"></span><span class="mtext">Data Pangkalan</span>
                </a>
            </li> --}}

        </ul>
    </div>
</div>