<nav class="sidebar">
    <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
            Shop<span>CONN</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>
            {{-- Invoice --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#invoice" role="button" aria-expanded="false"
                    aria-controls="invoice">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title">Invoice</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="invoice">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.invoices.create') }}" class="nav-link">New Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.invoices.index') }}" class="nav-link">Manage Invoice</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.invoices.settings') }}" class="nav-link">Invoice Settings</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Product --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#product" role="button" aria-expanded="false"
                    aria-controls="product">
                    <i class="link-icon" data-feather="shopping-bag"></i>
                    <span class="link-title">Product</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="product">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.products.create') }}" class="nav-link">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products.index') }}" class="nav-link">List Product</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.barcodes.create') }}" class="nav-link">Print Barcode</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.units.index') }}" class="nav-link">Manage Unit</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.brands.index') }}" class="nav-link">Manage Brand</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link">Manage Category</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Purchase --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#purchase" role="button" aria-expanded="false"
                    aria-controls="purchase">
                    <i class="link-icon" data-feather="shopping-cart"></i>
                    <span class="link-title">Purchase</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="purchase">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.purchases.create') }}" class="nav-link">Add Purchase</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.purchases.index') }}" class="nav-link">Manage Purchase</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Return --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#return" role="button" aria-expanded="false"
                    aria-controls="return">
                    <i class="link-icon" data-feather="refresh-ccw"></i>
                    <span class="link-title">Return</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="return">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Add Return</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Stock Return List</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Supplier Return List</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Wastage Return List</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- People --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#people" role="button" aria-expanded="false"
                    aria-controls="people">
                    <i class="link-icon" data-feather="user-plus"></i>
                    <span class="link-title">Peoples</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="people">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{ route('admin.customers.create') }}" class="nav-link">Add Customer</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.customers.index') }}" class="nav-link">List Customer</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.suppliers.create') }}" class="nav-link">Add Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.suppliers.index') }}" class="nav-link">List Supplier</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Expense --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#expense" role="button" aria-expanded="false"
                    aria-controls="expense">
                    <i class="link-icon" data-feather="trending-down"></i>
                    <span class="link-title">Expense</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="expense">
                    <ul class="nav sub-menu">

                        <li class="nav-item">
                            <a href="{{ route('admin.expenses.create') }}" class="nav-link">Add Expenses</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expenses.index') }}" class="nav-link">Manage Expenses</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.expense_categories.index') }}" class="nav-link">Manage
                                Categories</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Stock --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#stock" role="button" aria-expanded="false"
                    aria-controls="stock">
                    <i class="link-icon" data-feather="check-circle"></i>
                    <span class="link-title">Stock</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="stock">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.stocks.index') }}" class="nav-link">Stock Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Manage Stock Report</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Report --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#reports" role="button" aria-expanded="false"
                    aria-controls="reports">
                    <i class="link-icon" data-feather="bar-chart-2"></i>
                    <span class="link-title">Report</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="reports">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Todays Sale Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Monthly Sale Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="v" class="nav-link">Todays Purchase Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Monthly Purchase Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Sale Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Purchase Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Expense Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Total Profit Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Slow Moving Sales Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Fast Moving Sales Report</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Users --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#users" role="button" aria-expanded="false"
                    aria-controls="users">
                    <i class="link-icon" data-feather="user-check"></i>
                    <span class="link-title">Users</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="users">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.users.create') }}" class="nav-link">Add User</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link">User List</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.permissions.index') }}" class="nav-link">Role Permission</a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Transactions --}}
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#transaction" role="button" aria-expanded="false"
                    aria-controls="transaction">
                    <i class="link-icon" data-feather="briefcase"></i>
                    <span class="link-title">Transactions</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="transaction">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{ route('admin.transactions.create') }}" class="nav-link">Make Transaction</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.banks.index') }}" class="nav-link">Manage Bank</a>
                        </li>
                    </ul>
                </div>
            </li>

            {{-- Settings --}}
            <li class="nav-item">
                <a href="{{ route('admin.settings.index') }}" class="nav-link">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</nav>