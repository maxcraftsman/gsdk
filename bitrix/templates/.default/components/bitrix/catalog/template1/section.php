<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
use Bitrix\Main\Loader;
use Bitrix\Main\ModuleManager;

$this->setFrameMode(true);

?>
<div class="content">
	<div class="page-title">
		Заправка и покупка
	</div>
	<div class="block-page" id="page-start">
		<div class="block-page-title">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		</div>
		<div class="block-page-content">
			<form action="#" class="block-form">
				<div class="form-title">
					Введите данные вашей организации
				</div>
				<div class="bot-input-blocks">
					<div class="input-block-1">
						<input type="text" class="input-text" placeholder="Название огранизиции" name="orgname" minlength="5" maxlength="50" required>
					</div>
					<div class="input-block-1">
						<input type="text" class="input-text" minlength="10" maxlength="12" name="inn" placeholder="ИНН" required>
					</div>
				</div>
				<div class="bot-input-blocks">
					<div class="input-block-1">
						<input type="text" class="input-text" name="contactname" placeholder="Контактное лицо" minlength="3" maxlength="50" required>
					</div>
					<div class="input-block-1">
						<input type="text" class="input-text" placeholder="Телефон" maxlength="12" name="phonenum" required data-validation-error-msg="Invalid Regex">
					</div>
				</div>

				<div class="input-submit">
					<button type="button" class="form-submit">Отправить</button>
				</div>
			</form>
		</div>
	</div>
	<div class="block-page bonus hidden animated flipInX" id="page-0">
		<div class="block-page-title">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		</div>
		<div class="block-page-content">
			<div class="block-form">
				<div class="form-title">
					2. Выберите принтер(ы) вашей организации
				</div>
				<form method="get" action="#" class="input-block">
					<div class="mobile-search-placeholder">
						Укажите производителя
					</div>
					<div class="input-block_inner">
						<input type="text" id="searchInput" class="form-search" name="searchorg" placeholder="Укажите производителя" required>
						<a id="searchOrg" class="form-search-button" >Найти</a>
					</div>
				</form>
				<div class="form-list" style="display: none;" id="searchOrgResult">
					<div class="form-col">
						<div class="form-item">
							<div class="form-item-name">Brother DCP-1201</div>
							<div class="form-item-link"><span data-name="Brother DCP-1201" class="add-link">Добавить</span></div>
						</div>
						<div class="form-item">
							<div class="form-item-name">Brother DCP-1202</div>
							<div class="form-item-link"><span data-name="Brother DCP-1202" class="add-link">Добавить</span></div>
						</div>
						<div class="form-item">
							<div class="form-item-name">Brother DCP-1203</div>
							<div class="form-item-link"><span data-name="Brother DCP-1203" class="add-link">Добавить</span></div>
						</div>
					</div>
					<div class="form-col">
						<div class="form-item">
							<div class="form-item-name">Brother DCP-1204</div>
							<div class="form-item-link"><span data-name="Brother DCP-1204" class="add-link">Добавить</span></div>
						</div>
						<div class="form-item">
							<div class="form-item-name">Brother DCP-1205</div>
							<div class="form-item-link"><span data-name="Brother DCP-1205" class="add-link">Добавить</span></div>
						</div>
						<div class="form-item">
							<div class="form-item-name">Brother DCP-1206</div>
							<div class="form-item-link"><span data-name="Brother DCP-1206" class="add-link">Добавить</span></div>
						</div>
					</div>
				</div>
				<form action="#" id="selectedDevices" style="display:none;">
					<div class="block-intro">
						<div class="block-intro-title">Выбраные принтеры</div><span class="mini-button flush-data" data-action="del">Очистить</span>
						<div class="block-intro-content">
						</div>
					</div>
					<div class="input-submit">
						<button type="button" class="form-submit">Далее &#8594;</button>
					</div>
				</form>
			</div>
		</div>

	</div>
	<div class="block-page bonus hidden animated flipInX" id="page-1">
		<div class="block-page-title">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
		</div>
		<div class="block-page-content">
			<form action="" class="block-form">
				<div class="form-title">
					3. Возможно вас заинтересует
				</div>
				<div class="form-list no-border">
					<div class="form-col">
						<div class="checkbox-block">
							<div class="checkbox">
								<input id="check1" type="checkbox" name="check" value="check1">
								<label for="check1">
									<div class="lable-name">Получать счет на эл. почту</div></label>
								</div>
							</div>
							<div class="checkbox-block">
								<div class="checkbox">
									<input id="check2" type="checkbox" name="check" value="check2">
									<label for="check2">
										<div class="lable-name">Доставка и замена картриджей</div></label>
									</div>
								</div>
								<div class="checkbox-block">
									<div class="checkbox">
										<input id="check6" type="checkbox" name="check" value="check6">
										<label for="check6">
											<div class="lable-name">Оригинал счет</div></label>
										</div>
									</div>
								</div>

								<div class="form-col">
									<div class="checkbox-block">
										<div class="checkbox">
											<input id="check3" type="checkbox" name="check" value="check3">
											<label for="check3">
												<div class="lable-name">Предзаказ картриджа для моих принтеров</div></label>
											</div>
										</div>
										<div class="checkbox-block">
											<div class="checkbox">
												<input id="check4" type="checkbox" name="check" value="check4">
												<label for="check4">
													<div class="lable-name">Уведомление о поступлении моих картриджей</div></label>
												</div>
											</div>

										</div>
									</div>
									<div class="input-submit">
										<input type="submit" class="form-submit" value="Далее &#8594;">
									</div>

								</form>
							</div>
						</div>
					</div>
