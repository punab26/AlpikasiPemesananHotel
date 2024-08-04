<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Booking Hotel') }}
        </h2>
        
    </x-slot>

    <div class="py-12 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">
                            {{ __('Welcome') }}
                        </div>
                        <div class="card-body">
                            {{ __("You're logged in!") }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!-- Include Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Additional Custom CSS for Enhancements -->
<style>
    
    .bg-light {
        background-color: #f8f9fa !important;
    }
    .card {
        border-radius: 10px;
    }
    .card-header {
        font-weight: bold;
        font-size: 1.25rem;
    }
    .card-body {
        font-size: 1rem;
    }

   
</style>
