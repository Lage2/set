<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('overall_header.html'); ?>	
<a name="maincontent"></a>							
<h1><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG'])) ? $this->_rootref['L_ACP_WYSIWYG'] : ((isset($user->lang['ACP_WYSIWYG'])) ? $user->lang['ACP_WYSIWYG'] : '{ ACP_WYSIWYG }')); ?></h1>								
<form id="acp_hello" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">
	<fieldset>
		<legend><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG'])) ? $this->_rootref['L_ACP_WYSIWYG'] : ((isset($user->lang['ACP_WYSIWYG'])) ? $user->lang['ACP_WYSIWYG'] : '{ ACP_WYSIWYG }')); ?></legend>
		<dl>
		<dt><label for="wysiwyg_show_radio"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_SHOW'])) ? $this->_rootref['L_ACP_WYSIWYG_SHOW'] : ((isset($user->lang['ACP_WYSIWYG_SHOW'])) ? $user->lang['ACP_WYSIWYG_SHOW'] : '{ ACP_WYSIWYG_SHOW }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_SHOW_DESC'])) ? $this->_rootref['L_ACP_WYSIWYG_SHOW_DESC'] : ((isset($user->lang['ACP_WYSIWYG_SHOW_DESC'])) ? $user->lang['ACP_WYSIWYG_SHOW_DESC'] : '{ ACP_WYSIWYG_SHOW_DESC }')); ?></dt>
			<dd><label><input type="radio" class="radio" name="wysiwyg_show_radio" value="1" id="wysiwyg_show_radio"<?php if ($this->_rootref['S_WYSIWYG_SHOW']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="wysiwyg_show_radio" value="0" id="wysiwyg_show_radio"<?php if ($this->_rootref['S_WYSIWYG_DSHOW']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
		</dl>
		<dl>
		<dt><label for="bbcode_image_show_radio"><?php echo ((isset($this->_rootref['L_ACP_BBCODE_IMAGE_SHOW'])) ? $this->_rootref['L_ACP_BBCODE_IMAGE_SHOW'] : ((isset($user->lang['ACP_BBCODE_IMAGE_SHOW'])) ? $user->lang['ACP_BBCODE_IMAGE_SHOW'] : '{ ACP_BBCODE_IMAGE_SHOW }')); ?>:</label><BR /><?php echo ((isset($this->_rootref['L_ACP_BBCODE_IMAGE_SHOW_DESC'])) ? $this->_rootref['L_ACP_BBCODE_IMAGE_SHOW_DESC'] : ((isset($user->lang['ACP_BBCODE_IMAGE_SHOW_DESC'])) ? $user->lang['ACP_BBCODE_IMAGE_SHOW_DESC'] : '{ ACP_BBCODE_IMAGE_SHOW_DESC }')); ?></dt>
			<dd><label><input type="radio" class="radio" name="bbcode_image_show_radio" value="1" id="bbcode_image_show_radio"<?php if ($this->_rootref['S_BBCODE_IMAGE_SHOW']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="bbcode_image_show_radio" value="0" id="bbcode_image_show_radio"<?php if ($this->_rootref['S_BBCODE_IMAGE_DSHOW']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
		</dl>
		<dl>
		<dt><label for="link_p_radio"><?php echo ((isset($this->_rootref['L_ACP_LINK_P'])) ? $this->_rootref['L_ACP_LINK_P'] : ((isset($user->lang['ACP_LINK_P'])) ? $user->lang['ACP_LINK_P'] : '{ ACP_LINK_P }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_ACP_LINK_P_DESC'])) ? $this->_rootref['L_ACP_LINK_P_DESC'] : ((isset($user->lang['ACP_LINK_P_DESC'])) ? $user->lang['ACP_LINK_P_DESC'] : '{ ACP_LINK_P_DESC }')); ?></dt>
			<dd><label><input type="radio" class="radio" name="link_p_radio" value="1" id="link_p_radio"<?php if ($this->_rootref['S_LINK_P']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?></label>
			<label><input type="radio" class="radio" name="link_p_radio" value="0" id="link_p_radio"<?php if ($this->_rootref['S_LINK_PD']) {  ?> checked="checked"<?php } ?> /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></label>
		</dd>
		</dl>
		<dl>
		<dt><label for="wysiwyg_bg"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_BG'])) ? $this->_rootref['L_ACP_WYSIWYG_BG'] : ((isset($user->lang['ACP_WYSIWYG_BG'])) ? $user->lang['ACP_WYSIWYG_BG'] : '{ ACP_WYSIWYG_BG }')); ?>:</label></dt>
			<dd><input type="text" class="input" name="wysiwyg_bg" value="<?php echo (isset($this->_rootref['S_WYSIWYG_BG'])) ? $this->_rootref['S_WYSIWYG_BG'] : ''; ?>" id="wysiwyg_bg" />
		</dd>
		</dl>
		<dl>
		<dt><label for="wysiwyg_color"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_COLOR'])) ? $this->_rootref['L_ACP_WYSIWYG_COLOR'] : ((isset($user->lang['ACP_WYSIWYG_COLOR'])) ? $user->lang['ACP_WYSIWYG_COLOR'] : '{ ACP_WYSIWYG_COLOR }')); ?>:</label></dt>
			<dd><input type="text" class="input" name="wysiwyg_color" value="<?php echo (isset($this->_rootref['S_WYSIWYG_COLOR'])) ? $this->_rootref['S_WYSIWYG_COLOR'] : ''; ?>" id="wysiwyg_color" />
		</dd>
		</dl>
		<dl>
		<dt><label for="wysiwyg_fonts"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_FONTS'])) ? $this->_rootref['L_ACP_WYSIWYG_FONTS'] : ((isset($user->lang['ACP_WYSIWYG_FONTS'])) ? $user->lang['ACP_WYSIWYG_FONTS'] : '{ ACP_WYSIWYG_FONTS }')); ?>:</label><BR /><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_FONTS_DESC'])) ? $this->_rootref['L_ACP_WYSIWYG_FONTS_DESC'] : ((isset($user->lang['ACP_WYSIWYG_FONTS_DESC'])) ? $user->lang['ACP_WYSIWYG_FONTS_DESC'] : '{ ACP_WYSIWYG_FONTS_DESC }')); ?></dt>
			<dd><textarea class="input" name="wysiwyg_fonts" id="wysiwyg_fonts" style="height:12em;font-size:14px;"><?php echo (isset($this->_rootref['S_WYSIWYG_FONTS'])) ? $this->_rootref['S_WYSIWYG_FONTS'] : ''; ?></textarea>
		</dd>
		</dl>
				<dl>
		<dt><label for="EXP"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_CUS_TITLE'])) ? $this->_rootref['L_ACP_WYSIWYG_CUS_TITLE'] : ((isset($user->lang['ACP_WYSIWYG_CUS_TITLE'])) ? $user->lang['ACP_WYSIWYG_CUS_TITLE'] : '{ ACP_WYSIWYG_CUS_TITLE }')); ?>:</label></dt>
			<dd><input type="text" class="input" name="EXP" value="<?php echo (isset($this->_rootref['S_EXP'])) ? $this->_rootref['S_EXP'] : ''; ?>" id="EXP" />
		</dd>
		</dl>
		<dl>
		<dt><label for="wysiwyg_exp"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_CUS'])) ? $this->_rootref['L_ACP_WYSIWYG_CUS'] : ((isset($user->lang['ACP_WYSIWYG_CUS'])) ? $user->lang['ACP_WYSIWYG_CUS'] : '{ ACP_WYSIWYG_CUS }')); ?>:</label><BR /><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_CUS_DESC'])) ? $this->_rootref['L_ACP_WYSIWYG_CUS_DESC'] : ((isset($user->lang['ACP_WYSIWYG_CUS_DESC'])) ? $user->lang['ACP_WYSIWYG_CUS_DESC'] : '{ ACP_WYSIWYG_CUS_DESC }')); ?></dt>
			<dd><textarea class="input" name="wysiwyg_exp" id="wysiwyg_exp" style="height:12em;font-size:14px;"><?php echo (isset($this->_rootref['S_WYSIWYG_EXP'])) ? $this->_rootref['S_WYSIWYG_EXP'] : ''; ?></textarea>
		</dd>
		</dl>
		<dl>
		<dt><label for="wdir"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_DIR'])) ? $this->_rootref['L_ACP_WYSIWYG_DIR'] : ((isset($user->lang['ACP_WYSIWYG_DIR'])) ? $user->lang['ACP_WYSIWYG_DIR'] : '{ ACP_WYSIWYG_DIR }')); ?>:</label><br /><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_DIR_DESC'])) ? $this->_rootref['L_ACP_WYSIWYG_DIR_DESC'] : ((isset($user->lang['ACP_WYSIWYG_DIR_DESC'])) ? $user->lang['ACP_WYSIWYG_DIR_DESC'] : '{ ACP_WYSIWYG_DIR_DESC }')); ?></dt>
			<dd><select id="wdir" name="wdir">
				<option value="ltr"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_DIR_LTR'])) ? $this->_rootref['L_ACP_WYSIWYG_DIR_LTR'] : ((isset($user->lang['ACP_WYSIWYG_DIR_LTR'])) ? $user->lang['ACP_WYSIWYG_DIR_LTR'] : '{ ACP_WYSIWYG_DIR_LTR }')); ?></option>
				<option value="rtl"><?php echo ((isset($this->_rootref['L_ACP_WYSIWYG_DIR_RTL'])) ? $this->_rootref['L_ACP_WYSIWYG_DIR_RTL'] : ((isset($user->lang['ACP_WYSIWYG_DIR_RTL'])) ? $user->lang['ACP_WYSIWYG_DIR_RTL'] : '{ ACP_WYSIWYG_DIR_RTL }')); ?></option>
			</select>
		</dd>
		</dl>
	</fieldset>
	<p class="submit-buttons">
		<input class="button1" type="submit" id="submit" name="submit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" />
	</p>
</form>
				
<?php $this->_tpl_include('overall_footer.html'); ?>