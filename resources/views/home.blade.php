<script src="{{ asset('js/app.js') }}"></script>
<script>
    Echo.channel('channel-testing')
    .listen('HelloEvent', (e) => {
        console.log(e);
    })
</script>
