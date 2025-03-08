<template>
    <header className="bg-blue h-[12vh]">
        <div className="justify-between items-center bg-blue px-10 flex h-full">
            <div className="h-[11vh] w-1/5 flex items-center">
                <div class="h-[90%]">
                    <a href="/">
                        <img class="h-[100%]" src="../../../public/images/logo.png" alt="Logo" />
                    </a>
                </div>
            </div>
            <!-- Menu open -->
            <div v-if="!isExpanded" @click="isExpanded = true" class="flex h-full items-center justify-end p-[3vw] hover:cursor-pointer">
                <div
                    class="h-2 w-16 rounded-full bg-white before:absolute before:h-2 before:w-16 before:-translate-y-4 before:rounded-full before:bg-white before:content-[''] after:absolute after:h-2 after:w-16 after:translate-y-4 after:rounded-full after:bg-white after:content-['']"
                ></div>
            </div>
            <!-- Menu closed -->
            <div v-if="isExpanded" @click="isExpanded = false" className="flex justify-end items-center h-full p-[3vw]">
                <div class="relative h-12 w-12 hover:cursor-pointer">
                    <div class="absolute left-0 top-1/2 h-2 w-full -translate-y-1/2 rotate-45 rounded-full bg-white"></div>
                    <div class="absolute left-0 top-1/2 h-2 w-full -translate-y-1/2 -rotate-45 rounded-full bg-white"></div>
                </div>
            </div>
        </div>
    </header>
    <div v-if="isExpanded" class="absolute top-[12vh] flex h-[88vh] w-full items-center justify-center bg-blue">
        <nav class="flex h-1/2 flex-col items-center justify-around">
            <a className="mx-3 text-white text-xl" href="/"> Accueil </a>
            <a className="mx-3 text-white text-xl" href="/evenements"> Nos évènements </a>
            <a className="mx-3 text-white text-xl" href="/a-propos"> À propos de nous </a>
        </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {
            isExpanded: false,
        };
    },
};
</script>
