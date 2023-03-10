<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">

            <a href="{{ route('home') }}" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
            </a>
            <a href="{{ route('product.index') }}" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Produk</span>
            </a>
            <a href="{{ route('category.index') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-lock fa-fw me-3"></i><span>Kategori Produk</span></a>
            <a href="{{ route('transaction.index') }}" class="list-group-item list-group-item-action py-2 ripple"><i
                    class="fas fa-chart-line fa-fw me-3"></i><span>Transaksi</span></a>
            {{-- <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-pie fa-fw me-3"></i><span>User</span>
            </a> --}}
        </div>
    </div>
</nav>
