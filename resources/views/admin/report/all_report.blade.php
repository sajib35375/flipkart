@extends('admin.admin_master')
@section('admin')



        <div class="content">
            <div class="row">



                <div  class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h2>Search By Date</h2>
                    </div>
                    <div class="card-body">

                            <form action="{{ route('search.report.date') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Date<span class="text-danger">*</span></label>
                                    <input name="search_date" class="form-control" type="date">
                                    @error('search_date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <input value="search" class="btn btn-success" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

{{--                search by month--}}
                <div  class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Search By Month</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('search.report.month') }}" method="POST" >
                                @csrf
                                <div class="form-group">
                                    <label for="">Month<span class="text-danger">*</span></label>
                                    <select name="search_month" class="form-control">
                                        <option value="">-Select-</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                    @error('search_month')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Year<span class="text-danger">*</span></label>
                                    <select name="search_year" class="form-control">
                                        <option value="">-Select-</option>
                                        <option value="2030">2030</option>
                                        <option value="2029">2029</option>
                                        <option value="2028">2028</option>
                                        <option value="2027">2027</option>
                                        <option value="2026">2026</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                    </select>
                                    @error('search_year')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <input value="search" class="btn btn-success" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

{{--search by year--}}
                <div  class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h2>Search By Year</h2>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('search.report.year') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Year<span class="text-danger">*</span></label>
                                    <select name="year_name" class="form-control">
                                        <option value="">-Select-</option>
                                        <option value="2030">2030</option>
                                        <option value="2029">2029</option>
                                        <option value="2028">2028</option>
                                        <option value="2027">2027</option>
                                        <option value="2026">2026</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <input value="search" class="btn btn-success" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                </div>
            </div>







@endsection
