import json
from employeeService import EmployeeService

class LambdaService:
    def returnCommon(self, message, statusCode=400, data={})->dict:
        return {
            "statusCode": statusCode,
            "message": message,
            "data": json.dumps(data, ensure_ascii=False)
        }

    def getBody(self, event:dict):
        if "body" not in event.keys(): raise Exception("body not found")
        return json.loads(event["body"])

    def employeeAddData(self, event:dict):
        try:
            data = self.getBody(event)
            if EmployeeService().addData(data): return self.returnCommon(statusCode=200, message=f"success")
            return self.returnCommon(message=f"not success")
        except Exception as e:
            return self.returnCommon(message=f"{e}")

    def employeeSetData(self, event:dict):
        try:
            data = self.getBody(event)
            if EmployeeService().setData(data): return self.returnCommon(statusCode=200, message=f"success")
            return self.returnCommon(message=f"not success")
        except Exception as e:
            return self.returnCommon(message=f"{e}")

    def employeeGetData(self, event:dict):
        try:
            data = self.getBody(event)
            code = data.get('code')
            if not code: raise Exception("code not found")
            r = EmployeeService().getData(code)
            if r: return self.returnCommon(statusCode=200, message=f"success", data=r)
            return self.returnCommon(message=f"data not found")
        except Exception as e:
            return self.returnCommon(message=f"{e}")