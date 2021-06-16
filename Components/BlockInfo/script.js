import $ from 'jquery'

class BlockInfo extends window.HTMLDivElement {
  constructor (...args) {
    const self = super(...args)
    self.init()
    return self
  }

  init () {
    this.$ = $(this)
    this.resolveElements()
    this.bindFunctions()
    this.bindEvents()
  }

  resolveElements () {
    this.$button = $('.go-back', this)
  }

  bindFunctions () {
    this.goBack = this.goBack.bind(this)
  }

  bindEvents () {
    this.$.on('click', this.goBack)
  }

  goBack (e) {
    e.preventDefault()
    window.history.back()
  }
}

window.customElements.define('flynt-block-info', BlockInfo, { extends: 'div' })
