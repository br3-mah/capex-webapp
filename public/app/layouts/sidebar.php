<nav class="sidebar fixed z-[9999] flex-none w-[240px] ltr:border-r rtl:border-l dark:bg-darkborder border-black/10 transition-all duration-300 overflow-hidden">
                <div class="h-full bg-white dark:bg-darklight">
                    <div class="p-4">
                        <a href="index.php" class="w-full main-logo">
                            <img src="assets/images/logo-dark.svg" class="mx-auto dark-logo h-7 logo dark:hidden" alt="logo" />
                            <img src="assets/images/logo-light.svg" class="hidden mx-auto light-logo h-7 logo dark:block" alt="logo" />
                            <img src="assets/images/logo-icon.svg" class="hidden mx-auto logo-icon h-7" alt="">
                        </a>
                    </div>
                    <div class="h-[calc(100vh-60px)]  overflow-y-auto overflow-x-hidden px-5 pb-4 space-y-16 detached-menu">
                        <ul class="relative flex flex-col gap-1 " x-data="{ activeMenu: 'dashboard' }">
                            <h2 class="my-2 text-sm text-black/50 dark:text-white/30"><span>Menu</span></h2>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group active" :class="{'active' : activeMenu === 'dashboard'}" @click="activeMenu === 'dashboard' ? activeMenu = null : activeMenu = 'dashboard'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2ZM12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4ZM15.8329 7.33748C16.0697 7.17128 16.3916 7.19926 16.5962 7.40381C16.8002 7.60784 16.8267 7.92955 16.6587 8.16418C14.479 11.2095 13.2796 12.8417 13.0607 13.0607C12.4749 13.6464 11.5251 13.6464 10.9393 13.0607C10.3536 12.4749 10.3536 11.5251 10.9393 10.9393C11.3126 10.5661 12.9438 9.36549 15.8329 7.33748ZM17.5 11C18.0523 11 18.5 11.4477 18.5 12C18.5 12.5523 18.0523 13 17.5 13C16.9477 13 16.5 12.5523 16.5 12C16.5 11.4477 16.9477 11 17.5 11ZM6.5 11C7.05228 11 7.5 11.4477 7.5 12C7.5 12.5523 7.05228 13 6.5 13C5.94772 13 5.5 12.5523 5.5 12C5.5 11.4477 5.94772 11 6.5 11ZM8.81802 7.40381C9.20854 7.79433 9.20854 8.4275 8.81802 8.81802C8.4275 9.20854 7.79433 9.20854 7.40381 8.81802C7.01328 8.4275 7.01328 7.79433 7.40381 7.40381C7.79433 7.01328 8.4275 7.01328 8.81802 7.40381ZM12 5.5C12.5523 5.5 13 5.94772 13 6.5C13 7.05228 12.5523 7.5 12 7.5C11.4477 7.5 11 7.05228 11 6.5C11 5.94772 11.4477 5.5 12 5.5Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Dashboard</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'dashboard'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'dashboard'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="index.php" class="active">Default</a></li>
                                    <li><a href="project-dashboard.php">Projects <span class="inline-block px-2 py-1 text-xs leading-none text-pink-500 rounded bg-pink-500/10 ltr:ml-3 rtl:mr-3">New</span></a></li>
                                    <li><a href="ecommerce-dashboard.php">eCommerce <span class="inline-block px-2 py-1 text-xs leading-none text-pink-500 rounded bg-pink-500/10 ltr:ml-3 rtl:mr-3">New</span></a></li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'apps'}" @click="activeMenu === 'apps' ? activeMenu = null : activeMenu = 'apps'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M7.5 11.5C5.01472 11.5 3 9.48528 3 7C3 4.51472 5.01472 2.5 7.5 2.5C9.98528 2.5 12 4.51472 12 7C12 9.48528 9.98528 11.5 7.5 11.5ZM7.5 21.5C5.01472 21.5 3 19.4853 3 17C3 14.5147 5.01472 12.5 7.5 12.5C9.98528 12.5 12 14.5147 12 17C12 19.4853 9.98528 21.5 7.5 21.5ZM17.5 11.5C15.0147 11.5 13 9.48528 13 7C13 4.51472 15.0147 2.5 17.5 2.5C19.9853 2.5 22 4.51472 22 7C22 9.48528 19.9853 11.5 17.5 11.5ZM17.5 21.5C15.0147 21.5 13 19.4853 13 17C13 14.5147 15.0147 12.5 17.5 12.5C19.9853 12.5 22 14.5147 22 17C22 19.4853 19.9853 21.5 17.5 21.5ZM7.5 9.5C8.88071 9.5 10 8.38071 10 7C10 5.61929 8.88071 4.5 7.5 4.5C6.11929 4.5 5 5.61929 5 7C5 8.38071 6.11929 9.5 7.5 9.5ZM7.5 19.5C8.88071 19.5 10 18.3807 10 17C10 15.6193 8.88071 14.5 7.5 14.5C6.11929 14.5 5 15.6193 5 17C5 18.3807 6.11929 19.5 7.5 19.5ZM17.5 9.5C18.8807 9.5 20 8.38071 20 7C20 5.61929 18.8807 4.5 17.5 4.5C16.1193 4.5 15 5.61929 15 7C15 8.38071 16.1193 9.5 17.5 9.5ZM17.5 19.5C18.8807 19.5 20 18.3807 20 17C20 15.6193 18.8807 14.5 17.5 14.5C16.1193 14.5 15 15.6193 15 17C15 18.3807 16.1193 19.5 17.5 19.5Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Apps</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'apps'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'apps'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="email.php">email</a></li>
                                    <li><a href="chat.php">chat</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="invoice.php">invoice</a></li>
                                    <li><a href="calender.php">Calendar <span class="inline-block px-2 py-1 text-xs leading-none text-pink-500 rounded bg-pink-500/10 ltr:ml-3 rtl:mr-3">New</span></a></li>
                                </ul>
                            </li>
                            <h2 class="my-2 text-sm text-black/50 dark:text-white/30"><span>UI Kit</span></h2>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'components'}" @click="activeMenu === 'components' ? activeMenu = null : activeMenu = 'components'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M12 1L21.5 6.5V17.5L12 23L2.5 17.5V6.5L12 1ZM5.49388 7.0777L12.0001 10.8444L18.5062 7.07774L12 3.311L5.49388 7.0777ZM4.5 8.81329V16.3469L11.0001 20.1101V12.5765L4.5 8.81329ZM13.0001 20.11L19.5 16.3469V8.81337L13.0001 12.5765V20.11Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Components</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'components'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'components'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="tabs.php">tabs</a></li>
                                    <li><a href="accordions.php">accordions</a></li>
                                    <li><a href="modals.php">modals</a></li>
                                    <li><a href="clipboard.php">clipboard</a></li>
                                    <li><a href="notification.php">Notification</a></li>
                                    <li><a href="carousel.php">carousel</a></li>
                                    <li><a href="pricing.php">pricing</a></li>
                                    <li><a href="lightbox.php">lightbox</a></li>
                                    <li><a href="countdown.php">Countdown</a></li>
                                    <li><a href="counter.php">Counter</a></li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'elements'}" @click="activeMenu === 'elements' ? activeMenu = null : activeMenu = 'elements'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M13 9H21L11 24V15H4L13 0V9ZM11 11V7.22063L7.53238 13H13V17.3944L17.263 11H11Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">UI Elements</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'elements'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'elements'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="alerts.php">Alerts</a></li>
                                    <li><a href="buttons.php">Buttons</a></li>
                                    <li><a href="buttons-group.php">buttons group</a></li>
                                    <li><a href="badge.php">badge</a></li>
                                    <li><a href="breadcrumb.php">breadcrumb</a></li>
                                    <li><a href="videos.php">videos</a></li>
                                    <li><a href="images.php">Images</a></li>
                                    <li><a href="dropdowns.php">dropdowns</a></li>
                                    <li><a href="typography.php">typography</a></li>
                                    <li><a href="avatar.php">Avatar</a></li>
                                    <li><a href="tooltips.php">tooltips</a></li>
                                    <li><a href="loader.php">loader</a></li>
                                    <li><a href="pagination.php">pagination</a></li>
                                    <li><a href="progress-bar.php">progress bar</a></li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <a href="chart.php" class="nav-link group" :class="{'active' : activeMenu === 'chart'}">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M9 2.4578V4.58152C6.06817 5.76829 4 8.64262 4 12C4 16.4183 7.58172 20 12 20C15.3574 20 18.2317 17.9318 19.4185 15H21.5422C20.2679 19.0571 16.4776 22 12 22C6.47715 22 2 17.5228 2 12C2 7.52236 4.94289 3.73207 9 2.4578ZM12 2C17.5228 2 22 6.47715 22 12C22 12.3375 21.9833 12.6711 21.9506 13H11V2.04938C11.3289 2.01672 11.6625 2 12 2ZM13 4.06189V11H19.9381C19.4869 7.38128 16.6187 4.51314 13 4.06189Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Chart</span>
                                    </div>
                                </a>
                            </li>
                            <li class="menu nav-item">
                                <a href="icons.php" class="nav-link group" :class="{'active' : activeMenu === 'icons'}">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C13.4702 20 14.8478 19.6034 16.0316 18.9114L15.0237 17.1835C14.1359 17.7026 13.1027 18 12 18C8.68629 18 6 15.3137 6 12C6 8.68629 8.68629 6 12 6C15.3137 6 18 8.68629 18 12V13C18 13.5523 17.5523 14 17 14C16.4477 14 16 13.5523 16 13V9H14.6458C13.9407 8.37764 13.0144 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16C13.0465 16 13.9991 15.5982 14.7119 14.9404C15.2622 15.5886 16.0831 16 17 16C18.6569 16 20 14.6569 20 13V12ZM12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Font Icons</span>
                                    </div>
                                </a>
                            </li>
                            <li class="menu nav-item">
                                <a href="drag-and-drop.php" class="nav-link group" :class="{'active' : activeMenu === 'drag'}">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M12 2L16.2426 6.24264L14.8284 7.65685L12 4.82843L9.17157 7.65685L7.75736 6.24264L12 2ZM2 12L6.24264 7.75736L7.65685 9.17157L4.82843 12L7.65685 14.8284L6.24264 16.2426L2 12ZM22 12L17.7574 16.2426L16.3431 14.8284L19.1716 12L16.3431 9.17157L17.7574 7.75736L22 12ZM12 14C10.8954 14 10 13.1046 10 12C10 10.8954 10.8954 10 12 10C13.1046 10 14 10.8954 14 12C14 13.1046 13.1046 14 12 14ZM12 22L7.75736 17.7574L9.17157 16.3431L12 19.1716L14.8284 16.3431L16.2426 17.7574L12 22Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">drag & drop</span>
                                    </div>
                                </a>
                            </li>
                            <h2 class="my-2 text-sm text-black/50 dark:text-white/30"><span>Table & Forms</span></h2>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'forms'}" @click="activeMenu === 'forms' ? activeMenu = null : activeMenu = 'forms'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M21 8V20.9932C21 21.5501 20.5552 22 20.0066 22H3.9934C3.44495 22 3 21.556 3 21.0082V2.9918C3 2.45531 3.4487 2 4.00221 2H14.9968L21 8ZM19 9H14V4H5V20H19V9ZM8 7H11V9H8V7ZM8 11H16V13H8V11ZM8 15H16V17H8V15Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Forms</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'forms'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'forms'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="forms-basic.php">Basic</a></li>
                                    <li><a href="input-group.php">Input Group</a></li>
                                    <li><a href="forms-editors.php">Editors</a></li>
                                    <li><a href="validation.php">Validation</a></li>
                                    <li><a href="checkbox.php">Checkbox</a></li>
                                    <li><a href="radio.php">Radio</a></li>
                                    <li><a href="switches.php">Switches</a></li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'table'}" @click="activeMenu === 'table' ? activeMenu = null : activeMenu = 'table'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M4 8H20V5H4V8ZM14 19V10H10V19H14ZM16 19H20V10H16V19ZM8 19V10H4V19H8ZM3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Tables</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'table'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'table'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="tables-basic.php">Basic</a></li>
                                    <li><a href="datatables-basic.php">datatables</a></li>
                                    <li><a href="tables-editable.php">editable</a></li>
                                </ul>
                            </li>
                            <h2 class="my-2 text-sm text-black/50 dark:text-white/30"><span>Users & Pages</span></h2>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'users'}" @click="activeMenu === 'users' ? activeMenu = null : activeMenu = 'users'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H18C18 18.6863 15.3137 16 12 16C8.68629 16 6 18.6863 6 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Users</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'users'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'users'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="settings.php">Settings</a></li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group dark:text-white/80" :class="{'active' : activeMenu === 'pages'}" @click="activeMenu === 'pages' ? activeMenu = null : activeMenu = 'pages'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M5 8V20H19V8H5ZM5 6H19V4H5V6ZM20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM7 10H11V14H7V10ZM7 16H17V18H7V16ZM13 11H17V13H13V11Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Pages</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'pages'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'pages'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="blank.php">Starter Page</a></li>
                                    <li><a href="maintenance.php">maintenance</a></li>
                                    <li><a href="coming-soon.php">coming soon</a></li>
                                    <li><a href="404.php">404 Error</a></li>
                                    <li><a href="500.php">500 Error</a></li>
                                    <li><a href="503.php">503 Error</a></li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'layout'}" @click="activeMenu === 'layout' ? activeMenu = null : activeMenu = 'layout'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path fill="currentColor" d="M4 21C3.44772 21 3 20.5523 3 20V4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4ZM8 10H5V19H8V10ZM19 10H10V19H19V10ZM19 5H5V8H19V5Z"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Layout</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'layout'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'layout'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="creative.php">Creative Detached</a></li>
                                    <li><a href="detached.php">Detached</a></li>
                                </ul>
                            </li>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="items-center justify-between text-black nav-link group" :class="{'active' : activeMenu === 'authentication'}" @click="activeMenu === 'authentication' ? activeMenu = null : activeMenu = 'authentication'">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M6 10V20H19V10H6ZM18 8H20C20.5523 8 21 8.44772 21 9V21C21 21.5523 20.5523 22 20 22H4C3.44772 22 3 21.5523 3 21V9C3 8.44772 3.44772 8 4 8H6V7C6 3.68629 8.68629 1 12 1C15.3137 1 18 3.68629 18 7V8ZM16 8V7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7V8H16ZM7 11H9V13H7V11ZM7 14H9V16H7V14ZM7 17H9V19H7V17Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Authentication</span>
                                    </div>
                                    <div class="flex items-center justify-center w-4 h-4 dropdown-icon" :class="{'!rotate-180' : activeMenu === 'authentication'}">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6">
                                            <path d="M11.9997 13.1714L16.9495 8.22168L18.3637 9.63589L11.9997 15.9999L5.63574 9.63589L7.04996 8.22168L11.9997 13.1714Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </a>
                                <ul x-cloak x-show="activeMenu === 'authentication'" x-collapse class="flex flex-col gap-1 text-black sub-menu dark:text-white/60">
                                    <li><a href="login.php">Sign In</a></li>
                                    <li><a href="signup.php">Sign Up</a></li>
                                    <li><a href="reset-pw.php">Reset Password</a></li>
                                </ul>
                            </li>
                            <h2 class="my-2 text-sm text-black/50 dark:text-white/30"><span>Supports</span></h2>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="nav-link group" :class="{'active' : activeMenu === 'change'}">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M8 4H21V6H8V4ZM4.5 6.5C3.67157 6.5 3 5.82843 3 5C3 4.17157 3.67157 3.5 4.5 3.5C5.32843 3.5 6 4.17157 6 5C6 5.82843 5.32843 6.5 4.5 6.5ZM4.5 13.5C3.67157 13.5 3 12.8284 3 12C3 11.1716 3.67157 10.5 4.5 10.5C5.32843 10.5 6 11.1716 6 12C6 12.8284 5.32843 13.5 4.5 13.5ZM4.5 20.4C3.67157 20.4 3 19.7284 3 18.9C3 18.0716 3.67157 17.4 4.5 17.4C5.32843 17.4 6 18.0716 6 18.9C6 19.7284 5.32843 20.4 4.5 20.4ZM8 11H21V13H8V11ZM8 18H21V20H8V18Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Changelog</span>
                                    </div>
                                </a>
                            </li>
                            <li class="menu nav-item">
                                <a href="javaScript:;" class="nav-link group" :class="{'active' : activeMenu === 'docs'}">
                                    <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5">
                                            <path d="M20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM19 20V4H5V20H19ZM8 7H16V9H8V7ZM8 11H16V13H8V11ZM8 15H13V17H8V15Z" fill="currentColor"></path>
                                        </svg>
                                        <span class="ltr:pl-1.5 rtl:pr-1.5">Documentation</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="relative p-4 pt-0 text-center rounded-md bg-purple help-box">
                            <div class="relative -top-6">
                                <span class="text-black mx-auto border border-black/10 shadow-[0_0.75rem_1.5rem_rgba(18,38,63,.03)]  bg-white flex items-center justify-center h-12 w-12 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                        <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11 15H13V17H11V15ZM13 13.3551V14H11V12.5C11 11.9477 11.4477 11.5 12 11.5C12.8284 11.5 13.5 10.8284 13.5 10C13.5 9.17157 12.8284 8.5 12 8.5C11.2723 8.5 10.6656 9.01823 10.5288 9.70577L8.56731 9.31346C8.88637 7.70919 10.302 6.5 12 6.5C13.933 6.5 15.5 8.067 15.5 10C15.5 11.5855 14.4457 12.9248 13 13.3551Z" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </div>
                            <h4 class="text-xl text-white">Help Center</h4>
                            <p class="mt-4 text-white/70">Looks like there might be a new theme soon.</p>
                            <div class="mt-5">
                                <a href="javascript:;" class="btn-white">Go to help</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>