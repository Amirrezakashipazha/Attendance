const NavIcon = document.querySelector(".navigation-icon");
const ItemSidebar = document.querySelectorAll("[item-sidebar]");
const ItemSidebarImgDark = document.querySelectorAll(".img-dark-item-sidebar");
const ItemSidebarImgLight = document.querySelectorAll(
    ".img-light-item-sidebar"
);
const SideBar = document.querySelector(".side-bar");
const BgDark = document.querySelector(".bg-dark");
const DateShamsi = document.getElementById("date-shamsi");
const TimeShamsi = document.getElementById("time-shamsi");
const DropdownItemSidebar = document.querySelectorAll(".dropdown-item-sidebar");
const DataCheckEmptyTable = document.querySelectorAll(
    "[data-check-empty-table]"
);
const DataEmpltyTableMassage = document.querySelectorAll(
    "[data-emplty-table-massage]"
);
const DataInputValidation = document.querySelectorAll(
    "[data-input-validation]"
);
const ErrFromNewPersonel = document.querySelectorAll(".err-form-new-personel");
const Inputs = document.querySelectorAll("input");
const ErrFormSignin = document.querySelector(".err-form-signin");
const MatnFormSignin = document.querySelector(".err-form-signin>p");
const ErrEmailPhone = document.querySelector("#err-input-email_phone");
const BtnLogin = document.querySelector("#btn-login");
const CloseErrFormSignIn = document.querySelector("#close-err-form-signin");
const DataDropdownInput = document.querySelectorAll("[data-dropdown-input]");
const DataDropdownDiv = document.querySelectorAll("[data-dropdown-div]");
const DataItemDropdown = document.querySelectorAll("[data-item-dropdown]");
const DataBtnDropDownOperation = document.querySelectorAll(
    "[data-btn-dropdown-operation]"
);
const DataContentBtnDropDownOperation = document.querySelectorAll(
    "[data-btn-dropdown-operation]>div>p"
);
const DataImageBtnDropDownOperation = document.querySelectorAll(
    "[data-btn-dropdown-operation]>div>img"
);
const DataDropDownOperation = document.querySelectorAll(
    "[data-dropdown-operation]"
);
const DataBtnPushRequest = document.querySelector("[data-btn-push-request]");
const DataValueRequest = document.querySelectorAll("[data-value-request]");
const DataFormValidation = document.querySelectorAll("[data-form-validation]");
const BtnSubmitFormValidation = document.querySelectorAll(
    "[btn-submit-form-validation]"
);
const TableRequest = document.querySelectorAll("[table-request]");
const BtnShowModal = document.querySelector("[btn-show-modal]");
const ContainerModal = document.querySelector("[container-modal]");
const CloseModal = document.querySelectorAll("[close-modal]");
const BtnDropDown = document.querySelectorAll("[data-dropdown]");
const DropDown = document.querySelectorAll(".dropdown");
const BtnDeleteRow = document.querySelectorAll("[delete-row]");
const CloseModalLocation = document.querySelectorAll("[close-modal]");
const Modal = document.querySelector(".container-modal");
const DeleteRow = document.querySelector("[ok-delete-row]");
const RowTable = document.querySelectorAll("[body-table]>tr");
const ComponyName = document.querySelector("[data-input-name]");
const CompanyCity = document.querySelector("[data-input-city]");
const BodyTable = document.querySelector("[body-table]");
const BtnSearch = document.querySelector("[btn-search]");
const BtnDropDown2 = document.querySelectorAll("[data-dropdown-state]>p");
const DropDown2 = document.querySelectorAll(".dropdown-state");
const ItemDropdownState = document.querySelectorAll("[item-dropdown-state]");
const InputSerch = document.getElementById("input-search-personel");
const TablePersonel = document.getElementById("table-personel");
const BtnSearchPersonel = document.querySelector("[btn-search-personel]");
const BtnExcel = document.querySelector(".export-excel");
const BtnSearchProject = document.querySelector("[btn-search-project]");
const TableProject = document.getElementById("table-project");
const InputSerchProject = document.getElementById("input-search-project");
const InputEmailLogin = document.querySelector("[input-email-login]");
const InputPasswordLogin = document.querySelector("[password-email-login]");
const BtnDropdownOperationHoliday = document.querySelectorAll(
    "[data-btn-dropdown-operation-holiday]"
);
const DropdownOperationHoliday = document.querySelectorAll(
    "[data-dropdown-operation-holiday]"
);
const MatnDropdownOperationHoliday = document.querySelectorAll(
    "[data-btn-dropdown-operation-holiday]>p"
);
const ImgDropdownOperationHoliday = document.querySelectorAll(
    "[data-btn-dropdown-operation-holiday]>img"
);
const DataBtnDropdownOperationRequestEmployee = document.querySelectorAll(
    "[data-btn-dropdown-operation-request-employee]"
);
const DataDropdownOperationRequestEmployee = document.querySelectorAll(
    "[data-dropdown-operation-request-employee]"
);
const CloseModalManagerLocation = document.querySelectorAll(
    "[close-modal-location]"
);
const ContainerModalLocation = document.querySelector(
    "[modal-delete-location]"
);
const OkDeleteRowLocation = document.querySelector("[ok-delete-row-location]");
const CloseModalManagerPersonel = document.querySelectorAll(
    "[close-modal-personel]"
);
const ContainerModalPersonel = document.querySelector(
    "[modal-delete-personel]"
);
const OkDeleteRowPersonel = document.querySelector("[ok-delete-row-personel]");
const OkDeleteRowProject = document.querySelector("[ok-delete-row-project]");
const CloseModalManagerProject = document.querySelectorAll(
    "[close-modal-project]"
);
const ContainerModalProject = document.querySelector("[modal-delete-project]");
const OkDeleteRowHoliday = document.querySelector("[ok-delete-row-holiday]");
const CloseModalManagerHoliday = document.querySelectorAll(
    "[close-modal-holiday]"
);
const ContainerModalHoliday = document.querySelector("[modal-delete-holiday]");
const BodyTableHoliday = document.querySelector("[body-table-holiday]");
const OkBtnRowRequest = document.querySelector(
    "[ok-delete-row-request-employee]"
);
const CloseModalManagerRequest = document.querySelectorAll(
    "[close-modal-request-employee]"
);
const ContainerModalRequest = document.querySelector(
    "[modal-delete-request-employee]"
);
const OkDeleteRowShift = document.querySelector("[ok-delete-row-shift]");

const CloseModalManagerShift = document.querySelectorAll("[close-modal-Shift]");
const ContainerModalShift = document.querySelector("[modal-delete-Shift]");

const ItemDropDownState = document.querySelectorAll("[item-dropdown-state]");

const BtnAdvancedSetting = document.querySelector("[btn-advanced-setting]");
const ContentAdvancedSetting = document.querySelector(
    "[content-advanced-setting]"
);
const DataModal = document.querySelector("[data-modal]");

const BgDark2 = document.querySelector(".bg-dark2");

const BtnPutRequest = document.querySelector("[btn-put-request]");
const RequestType = document.querySelector("[request-type]");
const RequesstPersonel = document.querySelector("[requesst-personel]");
const RequestDate = document.querySelector("[request-date]");
const RequestTimeStart = document.querySelector("[request-time-start]");
const RequestTimeEnd = document.querySelector("[request-time-end]");
const TableRequestManager = document.querySelector("[table-request-manager]");
const OkDeleteRowRequestManager = document.querySelector(
    "[ok-delete-row-request-manager]"
);
const CloseModalRequestManager = document.querySelectorAll(
    "[close-modal-request-manager]"
);
const ContainerModalRequestManager = document.querySelector(
    "[modal-delete-request-manager]"
);
const NewNameWorkplace = document.querySelector("[ new-name-workplace]");
const NewCityWorkplace = document.querySelector("[ new-city-workplace]");
const NewLocationWorkplace = document.querySelector(
    "[ new-location-workplace]"
);
export {
    NavIcon,
    ItemSidebar,
    SideBar,
    BgDark,
    DateShamsi,
    TimeShamsi,
    DropdownItemSidebar,
    ItemSidebarImgDark,
    ItemSidebarImgLight,
    DataCheckEmptyTable,
    DataEmpltyTableMassage,
    ErrFromNewPersonel,
    DataInputValidation,
    Inputs,
    ErrFormSignin,
    MatnFormSignin,
    ErrEmailPhone,
    BtnLogin,
    CloseErrFormSignIn,
    DataDropdownInput,
    TableRequest,
    DataFormValidation,
    DataValueRequest,
    BtnSubmitFormValidation,
    DataBtnPushRequest,
    DataDropdownDiv,
    DataBtnDropDownOperation,
    DataDropDownOperation,
    DataItemDropdown,
    DataImageBtnDropDownOperation,
    DataContentBtnDropDownOperation,
    BtnShowModal,
    ContainerModal,
    CloseModal,
    BtnDropDown,
    DropDown,
    BtnDeleteRow,
    CloseModalLocation,
    Modal,
    DeleteRow,
    RowTable,
    ComponyName,
    CompanyCity,
    BodyTable,
    BtnSearch,
    BtnDropDown2,
    DropDown2,
    ItemDropdownState,
    InputSerch,
    TablePersonel,
    BtnSearchPersonel,
    BtnExcel,
    TableProject,
    InputSerchProject,
    BtnSearchProject,
    InputEmailLogin,
    InputPasswordLogin,
    BtnDropdownOperationHoliday,
    DropdownOperationHoliday,
    MatnDropdownOperationHoliday,
    ImgDropdownOperationHoliday,
    DataBtnDropdownOperationRequestEmployee,
    DataDropdownOperationRequestEmployee,
    CloseModalManagerLocation,
    ContainerModalLocation,
    OkDeleteRowLocation,
    OkDeleteRowPersonel,
    CloseModalManagerPersonel,
    ContainerModalPersonel,
    OkDeleteRowProject,
    CloseModalManagerProject,
    ContainerModalProject,
    OkDeleteRowHoliday,
    CloseModalManagerHoliday,
    ContainerModalHoliday,
    BodyTableHoliday,
    OkBtnRowRequest,
    CloseModalManagerRequest,
    ContainerModalRequest,
    OkDeleteRowShift,
    CloseModalManagerShift,
    ContainerModalShift,
    ItemDropDownState,
    BtnAdvancedSetting,
    ContentAdvancedSetting,
    DataModal,
    BgDark2,
    BtnPutRequest,
    RequestType,
    RequesstPersonel,
    RequestDate,
    RequestTimeStart,
    RequestTimeEnd,
    TableRequestManager,
    OkDeleteRowRequestManager,
    CloseModalRequestManager,
    ContainerModalRequestManager,
    NewNameWorkplace,
    NewCityWorkplace,
    NewLocationWorkplace,
};
