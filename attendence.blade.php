<x-app-layout>
@foreach($students as $student)
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="status[]" value="present">
        <label class="form-check-label">{{ $student->name }}</label>
    </div>
@endforeach
</x-app-layout>
