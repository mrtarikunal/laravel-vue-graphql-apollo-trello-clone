<!DOCTYPE html>

<html>

<head>
    <meta charset=utf-8 />
    <meta name="viewport"
        content="user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, minimal-ui">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>GraphQL Playground</title>

    <link rel="stylesheet" href="<?php echo e(\MLL\GraphQLPlayground\DownloadAssetsCommand::cssPath()); ?>" />
    <link rel="shortcut icon" href="<?php echo e(\MLL\GraphQLPlayground\DownloadAssetsCommand::faviconPath()); ?>" />
    <script src="<?php echo e(\MLL\GraphQLPlayground\DownloadAssetsCommand::jsPath()); ?>"></script>
</head>

<body>

    <div id="root" />
    <script type="text/javascript">
        window.addEventListener('load', function (event) {
        const root = document.getElementById('root');

        GraphQLPlayground.init(root, {
            endpoint: "<?php echo e(url(config('graphql-playground.endpoint'))); ?>",
            settings: {
                'request.credentials': 'same-origin',
            },
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        })
    })
    </script>

</body>

</html><?php /**PATH /Applications/MAMP/htdocs/laravello/resources/views/vendor/graphql-playground/index.blade.php ENDPATH**/ ?>