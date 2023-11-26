<?php include $this->resolve("partials/_header.php"); ?>
<?php /** @var array $errors */ ?>

<section
    class="max-w-2xl mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded"
>
    <form method="POST" class="grid grid-cols-1 gap-6">
        <!-- Email -->
        <label class="block">
            <span class="text-gray-700">Email address</span>
            <input
                type="email"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="john@example.com"
                name="email"
            />
            <?php if (array_key_exists('email', $errors)): ?>
                <div class="bg-gray-100 mt-2 p-2 text-red-500"><?=e($errors['email'][0]);?></div>
            <?php endif; ?>
        </label>
        <!-- Age -->
        <label class="block">
            <span class="text-gray-700">Age</span>
            <input
                type="number"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder=""
                name="age"
            />
            <?php if (array_key_exists('age', $errors)): ?>
                <div class="bg-gray-100 mt-2 p-2 text-red-500"><?=e($errors['age'][0]);?></div>
            <?php endif; ?>
        </label>
        <!-- Country -->
        <label class="block">
            <span class="text-gray-700">Country</span>
            <select name="country"
                class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
            >
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="Mexico">Mexico</option>
                <option value="Invalid">Invalid Country</option>
            </select>
            <?php if (array_key_exists('country', $errors)): ?>
                <div class="bg-gray-100 mt-2 p-2 text-red-500"><?=e($errors['country'][0]);?></div>
            <?php endif; ?>
        </label>
        <!-- Social Media URL -->
        <label class="block">
            <span class="text-gray-700">Social Media URL</span>
            <input
                type="text"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="socialMediaURL"
                name="socialMediaURL"
            />
            <?php if (array_key_exists('socialMediaURL', $errors)): ?>
                <div class="bg-gray-100 mt-2 p-2 text-red-500"><?=e($errors['socialMediaURL'][0]);?></div>
            <?php endif; ?>
        </label>
        <!-- Password -->
        <label class="block">
            <span class="text-gray-700">Password</span>
            <input
                type="password"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder=""
                name="password"
            />
            <?php if (array_key_exists('password', $errors)): ?>
                <div class="bg-gray-100 mt-2 p-2 text-red-500"><?=e($errors['password'][0]);?></div>
            <?php endif; ?>
        </label>
        <!-- Confirm Password -->
        <label class="block">
            <span class="text-gray-700">Confirm Password</span>
            <input
                type="password"
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder=""
                name="confirmPassword"
            />
            <?php if (array_key_exists('passwordConfirm', $errors)): ?>
                <div class="bg-gray-100 mt-2 p-2 text-red-500"><?=e($errors['confirmPassword'][0]);?></div>
            <?php endif; ?>
        </label>
        <!-- Terms of Service -->
        <div class="block">
            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"
                            type="checkbox" name="tos"
                        />
                        <span class="ml-2">I accept the terms of service.</span>
                    </label>
                </div>
            </div>
            <?php if (array_key_exists('tos', $errors)): ?>
                <div class="bg-gray-100 mt-2 p-2 text-red-500"><?=e($errors['tos'][0]);?></div>
            <?php endif; ?>
        </div>
        <button
            type="submit"
            class="block w-full py-2 bg-indigo-600 text-white rounded"
        >
            Submit
        </button>
    </form>
</section>


<?php include $this->resolve("partials/_footer.php"); ?>