@extends('layout')
@section('content')
    <section class="py-6">
        <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Create Submission</h2>
            <form action="#" method="POST">
                <div class="mb-4">
                    <label for="type" class="block text-gray-700 text-sm font-medium mb-1">Type</label>
                    <select id="type" name="type"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        <option value="Pending">Leave</option>
                        <option value="Approved">Permit</option>
                        <option value="Rejected">Travel</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-medium mb-1">Description</label>
                    <textarea id="description" name="description"
                        class="w-full px-4 py-2 border rounded-lg resize-none focus:ring focus:ring-indigo-200" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="attachment" class="block text-gray-700 text-sm font-medium mb-1">Attachment</label>
                    <input type="file" id="attachment" name="attachment"
                        class="w-full border rounded-lg focus:ring focus:ring-indigo-200">
                </div>
                <div class="mb-4">
                    <label for="submitter" class="block text-gray-700 text-sm font-medium mb-1">Submitter</label>
                    <input type="text" id="submitter" name="submitter"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" value="UserA" disabled
                        required>
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-medium mb-1">Status</label>
                    <select id="status" name="status"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        <option value="Pending">Pending</option>
                        <option value="Approved">Approved</option>
                        <option value="Rejected">Rejected</option>
                    </select>
                </div>
                <button type="submit"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600">Submit</button>
            </form>
        </div>

    </section>
@endsection
