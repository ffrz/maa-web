<?php $nav_active = 'base-schedule' ?>
@extends('public.layout')
@section('content')
  <section>
    <h1>Jadwal Kajian Rutin Salafy Ciktabar 2024</h1>
    <table class="table table-striped table-hover table-sm">
      <thead>
        <tr>
          <th>Pekan ke</th>
          <th>Hari</th>
          <th>Pemateri</th>
          <th>Tempat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($base_items as $i => $item)
          <tr>
            <td>{{ $item->week }}</td>
            <td>{{ day_name($item->day) }}</td>
            <td>{{ $item->speaker }}</td>
            <td>{{ $item->location }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
@endSection
