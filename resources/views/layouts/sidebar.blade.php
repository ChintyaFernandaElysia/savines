<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <div class="sidebar-brand-icon">
      {{-- <i class="fas fa-laugh-wink"></i> --}}
      <svg width="25" height="40" viewBox="0 0 25 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="12.5" cy="12.5" r="11.5196" fill="#FF9C08" stroke="#FF9C08" stroke-width="1.96078"/>
        <path d="M22.9411 13.8725C23.5293 7.54908 20.7842 2.00977 12.647 2.00977C4.50972 2.00977 1.29077 9.21555 2.10775 14.1175C3.23779 20.8978 8.84074 23.6076 16.7143 23.8109C17.2556 23.8249 17.6959 24.2612 17.6959 24.8027C17.6959 26.4415 17.6959 29.1206 17.6959 29.4606H5.29402" stroke="white" stroke-width="3.92157"/>
        <path d="M7.745 37.1572H16.5685" stroke="white" stroke-width="3.92157"/>
        </svg>
        
    </div>
    <div class="sidebar-brand-text mx-3">Savines</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <svg width="21" class="mr-2" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1.61111 12.1004H8.27778C8.88889 12.1004 9.38889 11.6004 9.38889 10.9893V2.10037C9.38889 1.48926 8.88889 0.989258 8.27778 0.989258H1.61111C1 0.989258 0.5 1.48926 0.5 2.10037V10.9893C0.5 11.6004 1 12.1004 1.61111 12.1004ZM1.61111 20.9893H8.27778C8.88889 20.9893 9.38889 20.4893 9.38889 19.8781V15.4337C9.38889 14.8226 8.88889 14.3226 8.27778 14.3226H1.61111C1 14.3226 0.5 14.8226 0.5 15.4337V19.8781C0.5 20.4893 1 20.9893 1.61111 20.9893ZM12.7222 20.9893H19.3889C20 20.9893 20.5 20.4893 20.5 19.8781V10.9893C20.5 10.3781 20 9.87815 19.3889 9.87815H12.7222C12.1111 9.87815 11.6111 10.3781 11.6111 10.9893V19.8781C11.6111 20.4893 12.1111 20.9893 12.7222 20.9893ZM11.6111 2.10037V6.54481C11.6111 7.15592 12.1111 7.65592 12.7222 7.65592H19.3889C20 7.65592 20.5 7.15592 20.5 6.54481V2.10037C20.5 1.48926 20 0.989258 19.3889 0.989258H12.7222C12.1111 0.989258 11.6111 1.48926 11.6111 2.10037Z" fill="#95B2FE"/>
      </svg>      
      <span>Dashboard</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('transactions') }}">
      <svg width="21" class="mr-2" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0.5 6.48926H18.5M14.5 1.48926L19.5 6.48926L14.5 11.4893M20.5 16.4893H2.5M6.5 11.4893L1.5 16.4893L6.5 21.4893" stroke="#95B2FE" stroke-width="2"/>
      </svg>        
      <span>Transactions</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('debtloan') }}">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="20" class="mr-2" xml:space="preserve" version="1.1" viewBox="0 0 18 20">
        <image width="18" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAUCAYAAACAl21KAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAFESURBVHgBrVTdTcMwEL47h5++ZYQyAbABDEAhG5A3oEIok5QKlVe6QSQYADYAJmhG6COI2ocNsbjEiZDcfpLl+3znL77L2Xhfrs6MogcESCEOldE6J1Y0WUPEYUhKlYkzHLOqxxABK/JspzTxC9fZ1gtEYPZofuYkcJSrc1AA41Ey99wQDhunQK683yMQAlv42pp7TkEQ/vn7hBi4aHME2m+umfdA2ubIzhiPCCECfn9woknJaZHhUvJd+Gi0x2U2qNr7gvS3Fb/arywkN2pnIYf09woh16UUPIgJl0Khq1PaG2g8lJz0Z2NIv0fSIQ65qJFDV03+FZo98Y3tR7g4wannxHAgYxDhzft7hYD5Vv9aU89NECP8vULa5O6KSN51RdrbNt+Qd+XXEawBJ+T+UFq/K1GwqVRkH7TMNl0F8VjaOhbfmsiMJf1VGywAAAAASUVORK5CYII="/>
      </svg>    
      <span>Debt and Loan</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('goals') }}">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="21" height="21" class="mr-2" xml:space="preserve" version="1.1" viewBox="0 0 21 21">
        <image width="21" height="21" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAVCAYAAACpF6WWAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAL/SURBVHgBfVTRcRoxEN2VBEwymQmpIJcKQgm4ARsqsPlkMGNTgaEC7HHifIIrgJACfOngXIFxB2QmM4nPSJtdnWSfCVgfp1tJ+3b37ZMQXhnjGdUN2CZqTIig7hcdZWvQ6aCNq9K5hO1ltM12sLxR05UxATUBlF9DDJsaoUpuxH9DMb/+oDPnHEZ7K6gcAqIhA3qbvykS3TqAFcPXCWF5fKDPy2f5d1TGwBeAC5owzFGBRhdvnRp2SmVuCx5AUkv002fp8iluObRy1rb77Urq15kK0rpJ1mXPa+sj0GryXySiUe9AD03BISUxagSUtZqGifAqkUkpKdGDOoWJ2gHos5VPVcNZYGMaAauabpjPRDLn9TlHS2MCCulwF6AHFdlEHpX9OyoFSZAgQ/fQ7rbfLCOgBPN7AEvm8ZoDLHsHZhooPMnXcG2Mtk2RjZAtzp6KIsgqAl7OHpugVDNk6AHRPuz1QzAZXxb2lDMeG8B7g4BJUQHdylzRrlWIAucCKI0CrW+icwTslgALfw7Gm6hdYuSmiOE8d36zsMndF03RrXJTpOR+KXtwLg2qePJXDOANEbbPJNqoPnoUdipnpJyd+1mbQ3Y+Q60aYevJX7FkloWBn2XWVs1DQa3x7E8iWSiLnxx3mOW212tXsxLvfD735zUq7y96Ruk+d/ROIuUWP8hDcbVwIqcm39Es52YNSvx5BRia8V5DJNjbx05QhWCAYJgAkglIrZDSAC12QLFOERpVXbu7WtDckrs1TInlCkB49w17IUGpdyp4qkh5PfAz0Kk0oMvPGDrcY0Vch/WW8Oe4ZJRHRR6ZoICr2bq1qXMs64zlNQZ/912n3zaeq29cmmWZSVfJ0bICj2mUkySAWs8kUPlWvXilLr/bc87oJJaSc+TBhh4Dr3WhSiorekoXDHga93HTgYGHUurzAUx5ypjTX9zh9/zfKB7voBGgwfF+8b7uBH0qWbkhy+wQtg/RMkvtYdDdUgnCK2PCZf6GdUMEHm7aSnT4Dky26/GW8Q8ButPGuN8oAgAAAABJRU5ErkJggg=="/>
      </svg>            
      <span>Goals</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('notes') }}">
      <svg width="25" class="mr-2" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.5 14.4893V12.4893H17.5V14.4893H7.5ZM7.5 18.4893V16.4893H14.5V18.4893H7.5ZM5.5 22.4893C4.95 22.4893 4.479 22.2936 4.087 21.9023C3.69567 21.5103 3.5 21.0393 3.5 20.4893V6.48926C3.5 5.93926 3.69567 5.46859 4.087 5.07726C4.479 4.68526 4.95 4.48926 5.5 4.48926H6.5V2.48926H8.5V4.48926H16.5V2.48926H18.5V4.48926H19.5C20.05 4.48926 20.521 4.68526 20.913 5.07726C21.3043 5.46859 21.5 5.93926 21.5 6.48926V20.4893C21.5 21.0393 21.3043 21.5103 20.913 21.9023C20.521 22.2936 20.05 22.4893 19.5 22.4893H5.5ZM5.5 20.4893H19.5V10.4893H5.5V20.4893Z" fill="#95B2FE"/>
        </svg>        
      <span>Notes</span></a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
