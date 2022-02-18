<template>
  <div>
    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">{{ title }}</h1>
        <slot name="header"></slot>
      </div>
    </header>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <div class="px-4 py-6 sm:px-0"><slot></slot></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "PageComponent",
  props: {
    title: String,
  },
};
</script>
