<div>
<h1>Edit Task</h1>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" id="description" rows="3" required>{{ $task->description }}</textarea>
        <br>
        <button type="submit">Update Task</button>
    </form>
</div>
