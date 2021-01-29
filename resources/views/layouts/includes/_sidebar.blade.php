<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if (auth()->user()->role == 'admin')
                    <li><a href="/xsiswa" class=""><i class="lnr lnr-user"></i> <span>Siswa</span></a></li>	
                    <li><a href="/xguru" class=""><i class="lnr lnr-user"></i> <span>Guru</span></a></li>	
                    <li><a href="/xmapel" class=""><i class="lnr lnr-book"></i> <span>Mata Pelajaran</span></a></li>	
                @endif
                @if (auth()->user()->role == 'xsiswa' || auth()->user()->role == 'xguru')
                <li><a href="/xmapel-materi" class=""><i class="lnr lnr-book"></i> <span>Mata Pelajaran</span></a></li>
                @endif
                
                					
            </ul>
        </nav>
    </div>
</div>