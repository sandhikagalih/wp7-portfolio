import { registerAbility } from '@wordpress/abilities';

registerAbility('my-plugin/summarize-selection', {
  title: 'Summarize Selection',
  // Validator 1: Empty selection guard
  isEligible: ({ selection }) => {
    return selection && selection.length > 0;
  },
  perform: async ({ selection }) => {
    // Implementasi akan ditambahkan di step selanjutnya
  },
});
