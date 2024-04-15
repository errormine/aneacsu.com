<script>
    export let href = "";
</script>

<a {href} class="bubble"><slot/></a>

<style>
    a {
        display: block;
        position: relative;
        background: var(--gradient-primary);
        color: white;
        border: 1px solid var(--clr-primary-dark);
        padding: 0.2rem 1rem;
        border-radius: 100px;
        top: 0;
        transition: top 200ms;
        text-align: center;
        margin: 0 auto;
        max-width: fit-content;
    }

    a:hover,
    a:focus {
        text-decoration: none;
        top: -0.2rem;
    }
</style>
