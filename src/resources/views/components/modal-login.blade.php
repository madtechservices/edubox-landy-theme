<!-- open modal -->
<input type="checkbox" class="modal-toggle rounded-none" />
<div class="modal" id="my-modal-login">
    <div class="modal-box absolute p-0" id="modal">
        {{-- close modal --}}
        <label for="my-modal" class="btn btn-sm btn-circle absolute right-2 top-2" x-on:click="closeModal()">✕</label>
        {{-- modal header --}}
        <div class="items-start justify-between p-4 rounded-t border-b bg-black">
            <div class="text-4xl font-bold text-center text-white">
                jayaID
            </div>
            <div class="text-sm text-center mt-2 text-white">Satu Akun Untuk Semua Akses</div>
        </div>

        {{-- modal body --}}
        <div class="px-8 py-6 mt-4 text-left bg-white">
            <div class="text-sm lg:text-base text-center">Silahkan masuk untuk melanjutkan aktivitas</div>
        </div>

        {{-- form login --}}
        <form x-data="login()" @submit.prevent="submitLogin">
            <div class="px-8 gap-2">
                {{-- email/phone number --}}
                <div>
                    <label class="relative block">
                        <span class="text-xs font-bold">Email</span>
                        <div class="w-full rounded-lg border border-gray-300 mt-2 mb-3">
                            <input type="text" placeholder="Email" class="input w-full pr-3" x-model="formLogin.email.value" @blur="formLogin.email.validate(validationCallback)"
                                id='email' name="email" required>

                        </div>
                          <p class="text-red-500 text-xs italic py-2" x-cloak><span x-text="formLogin.email.errorMsg"></span></p>
                    </label>
                </div>

                {{-- password --}}
                <div class="py-2" x-data="{ show: true}">
                    <div class="flex">
                        <span class="text-xs font-bold">Password</span>
                        <span class="text-xs ml-auto text-blue-500">Forgot Password?</span>
                    </div>
                    <div class="relative">
                        <div class="w-full rounded-lg border border-gray-300 mt-2">
                            <input placeholder="Password" :type="show ? 'password' : 'text'" class="input w-full pr-3" id="password" x-model="formLogin.password.value" @blur="formLogin.password.validate(validationCallback)" name="password" required>

                        </div>
                          <p class="text-red-500 text-xs italic py-2" x-cloak><span x-text="formLogin.password.errorMsg"></span></p>
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                        <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                        :class="{'hidden': !show, 'block':show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 576 512">
                        <path fill="currentColor"
                            d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                        </path>
                        </svg>

                        <svg class="h-6 text-gray-700" fill="none" @click="show = !show"
                        :class="{'block': !show, 'hidden':show }" xmlns="http://www.w3.org/2000/svg"
                        viewbox="0 0 640 512">
                        <path fill="currentColor"
                            d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                        </path>
                        </svg>
                    </div>
                    </div>
                </div>

                {{-- button login --}}
                <button class="btn w-full mt-6 rounded-xl" type="submit">LOGIN</button> <span class="text-red-500 text-xs italic py-2" x-show="!isFormValid"> Form is not valid</span>

                {{-- sign up --}}
                <div class="mt-6">
                    <span class="text-xs">Belum Memiliki Akun ?
                    <label for="my-modal-signup" x-on:click="openModal()" <a class="text-blue-500 text-xs cursor-pointer"> Sign up</a></label></span>
                </div>
            </div>
        </form>
    </div>
</div>




