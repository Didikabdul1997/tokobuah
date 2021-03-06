import { Pipeline, Log } from '@ephox/agar';
import { UnitTest } from '@ephox/bedrock';
import { TinyApis, TinyLoader, TinyUi } from '@ephox/mcagar';

import ListsPlugin from 'tinymce/plugins/lists/Plugin';
import 'tinymce/themes/silver/Theme';

UnitTest.asynctest('tinymce.lists.browser.ToggleListWithEmptyLiTest', (success, failure) => {
  ListsPlugin();

  TinyLoader.setup(function (editor, onSuccess, onFailure) {
    const tinyApis = TinyApis(editor);
    const tinyUi = TinyUi(editor);

    Pipeline.async({},
      Log.steps('TBA', 'Lists: toggle bullet list on list with two empty LIs', [
        tinyApis.sFocus,
        tinyApis.sSetContent('<ul><li>a</li><li>&nbsp;</li><li>&nbsp;</li><li>b</li></ul>'),
        tinyApis.sSetSelection([0, 0, 0], 0, [0, 3, 0], 1),
        tinyUi.sClickOnToolbar('click list', 'button[aria-label="Bullet list"]'),
        tinyApis.sAssertContent('<p>a</p><p>&nbsp;</p><p>&nbsp;</p><p>b</p>')
      ])
    , onSuccess, onFailure);
  }, {
    indent: false,
    plugins: 'lists',
    toolbar: 'bullist',
    theme: 'silver',
    base_url: '/project/tinymce/js/tinymce'
  }, success, failure);
});
