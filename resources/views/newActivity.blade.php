<div>
    <h1>Crear Actividad</h1>
    <form action="{{ route('activities.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="type" class="form-label">Tipo de actividad</label>
            <select class="form-control" id="type" name="type">
                @foreach($activityTypes as $type)
                    <option value="{{ $type }}" {{ old('type') == $type ? 'selected' : '' }}>
                        {{ ucfirst($type) }}
                    </option>
                @endforeach
            </select>
        </div>     
        
        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="number" name="user_id" id="user_id" />
        </div>      

        <div class="mb-3">
            <label for="datetime" class="form-label">Fecha y hora</label>
            <input type="datetime-local" class="form-control" id="datetime" name="datetime" value="{{ old('datetime') }}" required>
        </div>

        <div>
            <label for="paid">Is Paid</label>
            <input type="hidden" name="paid" value="0">
            <input type="checkbox" id="paid" name="paid" value="1" />
        </div>

        <div class="mb-3">
            <label for="notes" class="form-label">Notas</label>
            <textarea class="form-control" id="notes" name="notes">{{ old('notes') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="satisfaction" class="form-label">Satisfacción (1-10)</label>
            <input type="number" class="form-control" id="satisfaction" name="satisfaction" min="1" max="10" value="{{ old('satisfaction') }}">
        </div>

        <button type="submit" onclick="return confirm('Are you sure you want to create this activity?')">SAVE</button>
        @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </form>
</div>
