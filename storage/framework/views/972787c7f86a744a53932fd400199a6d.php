<button <?php echo e($attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-green-800 border border-transparent rounded-md font-semibold text-xl text-white uppercase tracking-widest hover:bg-green-700 focus:bg-green-700 active:bg-green-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'])); ?>>
    <?php echo e($slot); ?>

</button>
<?php /**PATH /var/www/html/resources/views/components/primary-button.blade.php ENDPATH**/ ?>