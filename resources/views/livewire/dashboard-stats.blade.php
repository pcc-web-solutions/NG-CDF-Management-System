<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <x-dashboard.stat-card title="Total Applications" :value="$applications" icon="layers" />
    <x-dashboard.stat-card title="Projects Approved" :value="$projects" icon="file-text" />
    <x-dashboard.stat-card title="Funds Disbursed" :value="$disbursed" icon="send" />
</div>
