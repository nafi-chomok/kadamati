@extends('layouts.app') @section('content')


<div class="row">
    <div class="col-lg-12">
        <div class="main-box no-header clearfix">
            <div class="main-box-body clearfix">
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                            <tr>
                                <th><span>Name</span></th>
                                <th><span>Email</span></th>
                                <th><span>Contact No</span></th>
                                <th><span>Message</span></th>
                                <th><span>Created At</span></th>

                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                            <tr>
                                <td>
                                    <span>{{$contact->name}}</span>
                                </td>
                                <td>
                                    <span>{{$contact->email}}</span>
                                </td>
                                <td class="text-center">
                                    <span>{{$contact->contact_no}}</span>
                                </td>
                                <td>
                                    <span>{{$contact->message}}</span>
                                </td>
                                <td>
                                    <span>{{$contact->created_at}}</span>
                                </td>

                                <td style="width: 20%;">
                                    <form
                                        method="POST"
                                        action="/contact-us-index/delete/{{$contact->id}}"
                                        class="d-inline-block"
                                        onsubmit="return confirm('Are you sure?')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn-danger"
                                        >
                                            x
                                        </button>
                                    </form>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
