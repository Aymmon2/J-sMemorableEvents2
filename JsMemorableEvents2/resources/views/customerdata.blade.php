<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Customer Data</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('customerData') }}" id="journAdd" method="get">
                            @csrf
                            <div class="row input-daterange">
                                @if ($startDate && $endDate)
                                    <div class="col-md-4">
                                        <input type="date" class="form-control startDate" placeholder="Start"
                                            name="date_start"id="startdate" value="{{ $startDate }}" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control endDate" placeholder="End"
                                            name="date_end" value="{{ $endDate }}" />
                                    </div>
                                @else
                                    <div class="col-md-4">
                                        <input type="date" class="form-control startDate" placeholder="Start"
                                            name="date_start"id="startdate"
                                            value="{{ (new DateTime())->modify('first day of this month')->format('Y-m-d') }}" />
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" class="form-control endDate" placeholder="End"
                                            name="date_end"
                                            value="{{ (new DateTime())->modify('last day of this month')->format('Y-m-d') }}" />
                                    </div>
                                @endif
                                <div class="col-md-4">

                                    <button type="submit" name="filter" id="filter"
                                        class="btn btn-primary">Filter</button>
                                    <button type="button" name="refreshs" id="refreshs"
                                        class="btn btn-default"><a
                                            href="{{ route('customerData') }}"><i
                                                class="fa-solid fa-rotate-right">
                                                Reset</i></a></button>
                                                <a href="{{ route('customerExport', ['date_start' => $startDate, 'date_end' => $endDate]) }}"
                                                    class="btn btn-info" style="float: right;" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Download this Report to Excel">
                                                    <i class="fas fa-download"></i> Export Excel
                                                 </a>
                                </div>
                            </div>
                        </form>

                        <h4 class="card-title fw-bold text-center mb-7 mt-4">CUSTOMER ENQUIRY DATA</h4>

                        @if ($startDate && $endDate)
                            <p class="alert alert-success text-center"><b>{{ date('F d, Y', strtotime($startDate)) }} to {{ date('F d, Y', strtotime($endDate)) }}</b></p>
                        @endif

                        <div class="table-responsive">
                            <table class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Name</th>
                                        <th>Date & Time of Events</th>
                                        <th>Occasion</th>
                                        <th>Theme Colors</th>
                                        <th>People Count</th>
                                        <th>Message</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->created_at->format('F d, Y') }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($item['date'] . ' ' . $item['time'])->format('d F Y - g:i a') }}</td>
                                            <td>{{ $item->occasion }}</td>
                                            <td>{{ $item->themecolors }}</td>
                                            <td>{{ $item->people }}</td>
                                            <td>{{ $item->message }}</td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>

    <style>
        .custom-table th,
        .custom-table td {
            border: 1px solid #dee2e6;
            text-align: center;
        }

        .table-container {
            overflow-x: auto;
            max-width: 100%;
            /* Set a maximum width as needed */
            white-space: nowrap;
            /* Prevent line breaks within table cells */
        }
    </style>

    <script>
        $(document).ready(function () {
        $('[data-bs-toggle="tooltip"]').on('click', function () {
            // Hide the tooltip
            $(this).tooltip('hide');
        });
    });
    </script>
</body>
</html>
