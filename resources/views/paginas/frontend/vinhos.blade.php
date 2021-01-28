@extends("paginas.frontend.layout")

@section('title', 'Vinhos')

@section('links')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>

@endsection

@section('content')
<div class="ui large breadcrumb">
  <a class="section">Home</a>
  <i class="right chevron icon divider"></i>
  <a class="section">Registration</a>
  <i class="right chevron icon divider"></i>
  <div class="active section">Personal Information</div>
</div>
@endsection