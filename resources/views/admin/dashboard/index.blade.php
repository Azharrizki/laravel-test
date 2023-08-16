<x-admin-layout>
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Pengguna</h4>
                        </div>
                        <div class="card-body">
                            {{ $user }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-danger">
                        <i class="far fa-newspaper"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Products</h4>
                        </div>
                        <div class="card-body">
                            {{ $count_barang }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="far fa-file"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Reports</h4>
                        </div>
                        <div class="card-body">
                            1,201
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Terjual</h4>
                        </div>
                        <div class="card-body">
                            47
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Barang</h4>
                        <div class="card-header-action">
                            <a href="{{ route('data-barang') }}" class="btn btn-danger">View More <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th>Product</th>
                                        <th>QTY</th>
                                        <th>Price</th>
                                    </tr>
                                    @foreach ($barang as $item)
                                        <tr>
                                            <td class="py-3">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                    width="60" height="60">
                                                {{ $item->name }}
                                            </td>
                                            <td>
                                                {{ $item->qty }}
                                            </td>
                                            <td>Rp. {{ number_format($item->price, 0) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-hero">
                    <div class="card-header">
                        <div class="card-icon">
                            <i class="far fa-question-circle"></i>
                        </div>
                        <h4>14</h4>
                        <div class="card-description">Customers need help</div>
                    </div>
                    <div class="card-body p-0">
                        <div class="tickets-list">
                            <a href="#" class="ticket-item">
                                <div class="ticket-title">
                                    <h4>My order hasn't arrived yet</h4>
                                </div>
                                <div class="ticket-info">
                                    <div>Laila Tazkiah</div>
                                    <div class="bullet"></div>
                                    <div class="text-primary">1 min ago</div>
                                </div>
                            </a>
                            <a href="#" class="ticket-item">
                                <div class="ticket-title">
                                    <h4>Please cancel my order</h4>
                                </div>
                                <div class="ticket-info">
                                    <div>Rizal Fakhri</div>
                                    <div class="bullet"></div>
                                    <div>2 hours ago</div>
                                </div>
                            </a>
                            <a href="#" class="ticket-item">
                                <div class="ticket-title">
                                    <h4>Do you see my mother?</h4>
                                </div>
                                <div class="ticket-info">
                                    <div>Syahdan Ubaidillah</div>
                                    <div class="bullet"></div>
                                    <div>6 hours ago</div>
                                </div>
                            </a>
                            <a href="features-tickets.html" class="ticket-item ticket-more">
                                View All <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</x-admin-layout>
