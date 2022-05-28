from dataclasses import dataclass
from dataclasses_json import dataclass_json

@dataclass_json
@dataclass
class EmployeeModel:
    id: int
    code: str
    firstName: str
    lastName: str
    firstNameForeign: str
    lastNameForeign: str
    type: str
    paidPeriod: int
    salary: float
    prefix: str
    startDate: str
    endDate: str
    isActive: str
    dob: str
    departmentId: int
    departmentName: str
    departmentCode: str
    title: str
    identitficationNumber: str
    passportNumber: str
    mobile: str
    email: str
    socialSecurityValue: str
    withholdingTax: str
    address: str
    contactNumber: str
    accountNumber: str
    accountType: str
    methodPayment: str
    bankId: str
    bankBranchCode: str
    profileImage: str
    companyId: str
    createdOn: str
    modifiedOn: str
    createdBy: str
    modifiedBy: str
    isSocialSecurityRegistered: bool
    contactRelationship: str
    galleryId: str
    media: str
    idCard: str
    mediaIdCard: str
    householdRegistration: str
    mediaHouseholdRegistration: str
    remarks: str
    nickname: str
    nicknameForeign: str
    lineId: str
    conditionsWithholdingTax: str