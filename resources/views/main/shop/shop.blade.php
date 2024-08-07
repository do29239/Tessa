@extends('layouts.master')

@section('content')

    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Shop</h2>
                <ul>
                    <li><a href="{{ url('/') }}">{{__('messages.home')}}</a></li>
                    <li>{{__('messages.shop')}}</li>
                </ul>
                @if(Session('message'))
                    <div>{{session('message')}}</div>
                @endif
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Start Products Area -->
    <section class="products-area products-collections-area pt-100 pb-70">
        <div class="container-fluid">
            <div class="row">
                <span class="sub-title d-lg-none">
                    <a href="#" data-bs-toggle="modal" data-bs-target="#mobileFilterModal" class="filter-button">
                        <i class="bx bx-filter-alt"></i>{{__('messages.filter')}}
                    </a>
                </span>
                <livewire:Product.ProductFilter/>
                <div class="col-lg-8 col-md-12">
                    <livewire:LoadProducts/>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Filter Modal for Mobile -->
    <div class="modal fade" id="mobileFilterModal" tabindex="-1" aria-labelledby="mobileFilterModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mobileFilterModalLabel">{{__('messages.filter_products')}}</h5>
                    <button type="button" id="modalCloseButton" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <livewire:Product.ProductFilter/>

                </div>
            </div>
        </div>
    </div>
    <style>

        .input-counter{
            padding-left: 20px;
        }
        .qty-input{

            max-width: 60px;
        }

        .input-counter {
            display: flex;
            align-items: center;
        }
        .btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background-color: #ddd;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .qty-input {
            width: 40px;
            height: 32px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin: 0 10px;
        }

    </style>
    <!-- End Products Area -->
@endsection
<script>

    document.addEventListener('DOMContentLoaded', function () {
        var modalCloseButton = document.getElementById('modalCloseButton');

        Livewire.on('categorySelected', function () {
            if (modalCloseButton) {
                modalCloseButton.click();
            }
        });

        Livewire.on('brandSelected', function () {
            if (modalCloseButton) {
                modalCloseButton.click();
            }
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        // Variables to store the component state
        let selectedCategory = null;
        let selectedBrand = null;
        let searchTerm = '';
        let amount = 9;

        // Event listener for when the component state is loaded
        window.addEventListener('loadState', function (event) {
            selectedCategory = event.detail.selectedCategory;
            selectedBrand = event.detail.selectedBrand;
            searchTerm = event.detail.searchTerm;
            amount = event.detail.amount;
        });

        // Event listener for before the page is unloaded
        window.addEventListener('beforeunload', function () {
            axios.post('/save-shop-state', {
                selectedCategory: selectedCategory,
                selectedBrand: selectedBrand,
                searchTerm: searchTerm,
                amount: amount
            });
        });
    });
    document.addEventListener('DOMContentLoaded', function () {
        const filterButton = document.querySelector('.filter-button');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) { // Adjust the scroll value as needed
                filterButton.classList.add('fixed');
            } else {
                filterButton.classList.remove('fixed');
            }
        });
    });
</script>
