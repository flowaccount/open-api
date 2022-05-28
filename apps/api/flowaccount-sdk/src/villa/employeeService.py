from employeeModel import EmployeeModel
from flowaccountService import FlowaccountService

class EmployeeService:
    def addData(self, data:dict):
        eObj = EmployeeModel.from_dict(data)
        return FlowaccountService().addData(eObj)

    def setData(self, data:dict):
        eObj = EmployeeModel.from_dict(data)
        return FlowaccountService().setData(eObj)

    def getData(self, code:str):
        return FlowaccountService().getData(code)