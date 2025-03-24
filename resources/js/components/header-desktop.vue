<template>
    <header className="bg-blue h-[12vh]">
        <div className=" h-full justify-between items-center bg-blue px-10 flex">
            <div className="h-[11vh] w-1/5 flex items-center">
                <div class="h-[90%]">
                    <a href="/">
                        <img class="h-[100%]" src="../../../public/images/logo.png" alt="Logo" />
                    </a>
                </div>
            </div>
            <nav>
                <a className="mx-3 text-white text-3xl" href="/"> Accueil </a>
                <a className="mx-3 text-white text-3xl" href="/evenements"> Nos évènements </a>
                <a className="mx-3 text-white text-3xl" href="/a-propos"> À propos de nous </a>
            </nav>
            <div className="w-1/5 flex justify-end">
                <a href="/salle-chevaliers">
                    <button className="bg-white text-black text-2xl p-5 rounded-full border-transparent border-solid border-4 hover:border-black">
                        Réserver notre salle
                    </button>
                </a>
            </div>
        </div>
    </header>
</template>

<script>
export default {};
</script>

<style></style>
