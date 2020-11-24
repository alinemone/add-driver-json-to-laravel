<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Quera Custom Database Driver </title>

    <style>
        div {
            color: black;
            margin: 0 auto;
            width: 50%;
            background-color: #b4b4b4;
            border-radius: 8px;
            font-family: system-ui;
            border-top: 4px solid #007bff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
        }

        .text-center {
            text-align: center;
        }

        ul {
            margin: 0;
            padding: 0 20px 20px;
        }

        li {
            font-size: 22px;
            list-style: none;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h2> List </h2>
        <ul>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($user->name); ?> <?php echo e($user->family); ?> - <?php echo e($user->username); ?> - <?php echo e($user->password); ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</body>
</html>
<?php /**PATH C:\Users\Alinemone\Desktop\codeCup\database json\resources\views/index.blade.php ENDPATH**/ ?>