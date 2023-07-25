<template>
  <div class="col-12">
    <table class="table table-bordered">
      <!-- Table header -->
      <thead>
        <tr>
          <th v-for="header in headers" :key="header.value">{{ header.text }}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in items" :key="item.id">
          <td>{{ item.codigo_departamento }}</td>
          <td>{{ item.departamento }}</td>
          <td>{{ item.codigo_entidad }}</td>
          <td>{{ item.entidad }}</td>
          <td>{{ item.dimension }}</td>
          <td>{{ item.indicador }}</td>
          <td>{{ item.dato_numerico }}</td>
          <td>{{ item.date }}</td>
          <td>{{ item.fuente }}</td>
        </tr>
      </tbody>
    </table>

    <!-- Pagination -->
    <nav aria-label="Page navigation">
      <ul class="pagination">

        <!-- Numbered buttons -->
        <li v-for="page in displayedPages" :key="page" :class="{ 'page-item': true, active: page === currentPage }">
          <a class="page-link" @click="paginateData(page)">
            {{ page }}
          </a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  props: {
    initialItems: {
      type: Array,
      default: () => [],
    },
  },
  data() {
    return {
      items: this.initialItems,
      pagination: {},
      currentPage: 1,
      itemsPerPage: 10,
      maxDisplayedPages: 10,
    };
  },
  computed: {
    totalPages() {
      return Math.ceil(this.pagination.total / this.itemsPerPage);
    },
    displayedPages() {
      const halfDisplayed = Math.floor(this.maxDisplayedPages / 2);
      const leftBound = this.currentPage - halfDisplayed;
      const rightBound = this.currentPage + halfDisplayed;

      let startPage = leftBound > 0 ? leftBound : 1;
      let endPage = rightBound < this.totalPages ? rightBound : this.totalPages;

      if (endPage - startPage < this.maxDisplayedPages - 1) {
        if (startPage === 1) {
          endPage = Math.min(endPage + this.maxDisplayedPages - 1, this.totalPages);
        } else {
          startPage = Math.max(startPage - (this.maxDisplayedPages - 1), 1);
        }
      }

      const pages = [];
      for (let i = startPage; i <= endPage; i++) {
        pages.push(i);
      }
      return pages;
    },
  },
  methods: {
    get() {
      axios
        .get(`/indicador/get?page=${this.currentPage}&per_page=${this.itemsPerPage}`)
        .then((res) => {
          this.items = res.data.indicadores.data;
          this.pagination = res.data.indicadores;
        })
        .catch((error) => {
          console.log(error.response);
        });
    },
    paginateData(page) {
      this.currentPage = page;
      this.get();
    },
  },
  mounted() {
    this.get();
  },
};
</script>
