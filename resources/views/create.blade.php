{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .container {
            @apply px-10 mx-auto;
          }
        }
      </style>
    <title>Create Post</title>
</head>
<body>
    <div class="container">
        <div class="flex justify-between my-5">
            <h1 class="text-red-500 text-x1">Create</h1>

            <a href="/" class="bg-green-600 text-white rounded py-2 px-4">Bact to Home</a>
        </div>

        <div>
            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4 flex flex-col gap-5 border-2 p-3">
                    <label for="title">Name</label>
                    <input type="text" name="name">
                    @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <label for="description">Description</label>
                    <input type="text" name="description">
                    @error('description')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <label for="image">Select Image</label>
                    <input type="file" name="image">
                    @error('image')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input type="submit" class="bg-green-600 text-white rounded py-2 px-4" value="Create Post">
                </div>
            </form>
        </div>
    </div>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
          .container {
            @apply max-w-4xl mx-auto px-4 sm:px-6 lg:px-8;
          }
        }
    </style>
    <title>Create Post</title>
</head>
<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-purple-700 text-white py-6">
        <div class="container flex justify-between items-center">
            <h1 class="text-3xl font-bold">My Blog</h1>
            <nav>
                <a href="/" class="text-lg font-medium hover:underline">Home</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container py-10 flex-grow">
        <!-- Header Section -->
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-red-500">Create Post</h1>
            <a href="/" class="bg-green-600 hover:bg-green-700 text-white rounded py-2 px-4 transition">
                Back to Home
            </a>
        </div>

        <!-- Form Section -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Name Field -->
                <div class="mb-5">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Post Name</label>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                        value="{{old('name')}}"
                        placeholder="Enter post name">
                    @error('name')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description Field -->
                <div class="mb-5">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Post Description</label>
                    <textarea
                        name="description"
                        id="description"
                        rows="4"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500"
                        value="{{old('description')}}"
                        placeholder="Enter post description"></textarea>
                    @error('description')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Image Upload -->
                <div class="mb-5">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Select Image</label>
                    <input
                        type="file"
                        name="image"
                        id="image"
                        class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-green-500 focus:border-green-500">
                    @error('image')
                        <p class="text-sm text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white rounded-lg py-2 px-6 transition">
                        Create Post
                    </button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
        <p>&copy; 2024 My Blog. All Rights Reserved.</p>
    </footer>

</body>
</html>
