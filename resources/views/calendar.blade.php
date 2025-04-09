@extends('layouts.app')

@section('content')
    <div class="calendar-page">
        <div class="container-fluid">
            <!-- Calendar Header -->
            <div class="main-calendar-header bg-primary text-white p-3 rounded-top">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center gap-3">
                        <h2 class="mb-0">
                            <span id="currentMonthYear"></span>
                            <small id="realTimeClock" class="fs-5"></small>
                        </h2>
                    </div>
                    <div class="main-calendar-controls d-flex gap-2">
                        <button class="btn btn-light btn-sm main-prev-month">
                            <i class="lni lni-chevron-left"></i>
                        </button>
                        <button class="btn btn-light btn-sm main-today">Today</button>
                        <button class="btn btn-light btn-sm main-next-month">
                            <i class="lni lni-chevron-right"></i>
                        </button>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#eventModal">
                            <i class="lni lni-plus"></i> Add Event
                        </button>
                    </div>
                </div>
            </div>

            <!-- Calendar Container -->
            <div class="main-calendar-container p-3 rounded-bottom shadow">
                <div id="main-calendar"></div>
            </div>

            <!-- Event Details Sidebar (for desktop) -->
            <!-- <div class="calendar-sidebar">
                <div class="event-details p-3">
                    <h5>Event Details</h5>
                    <div id="eventDetails"></div>
                </div>
            </div> -->
        </div>

        <!-- Event Modal -->
        <div class="modal fade" id="eventModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create New Event</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <form id="eventForm">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Event Title</label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Start Date</label>
                                    <input type="datetime-local" class="form-control" name="start" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">End Date</label>
                                    <input type="datetime-local" class="form-control" name="end">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Event Type</label>
                                <select class="form-select" name="type">
                                    <option value="meeting">Meeting</option>
                                    <option value="holiday">Holiday</option>
                                    <option value="reminder">Reminder</option>
                                    <option value="event">General Event</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <div class="form-label">Reminders</div>
                                <div class="d-flex gap-2 flex-wrap">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="reminders[]" value="15">
                                        <label class="form-check-label">15 mins before</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="reminders[]" value="60">
                                        <label class="form-check-label">1 hour before</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="reminders[]" value="1440">
                                        <label class="form-check-label">1 day before</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection