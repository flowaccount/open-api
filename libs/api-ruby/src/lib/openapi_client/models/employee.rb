=begin
#FlowAccount Open API

#No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)

The version of the OpenAPI document: 1.0.0

Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.4.0

=end

require 'date'
require 'time'

module OpenapiClient
  class Employee
    attr_accessor :id

    attr_accessor :company_id

    attr_accessor :prefix

    attr_accessor :first_name

    attr_accessor :last_name

    attr_accessor :salary

    attr_accessor :identitfication_number

    attr_accessor :passport_number

    attr_accessor :profile_image

    attr_accessor :mobile

    attr_accessor :commission

    attr_accessor :remarks

    attr_accessor :title

    attr_accessor :gallery_id

    attr_accessor :bank_id

    attr_accessor :branch

    attr_accessor :account_number

    attr_accessor :account_type

    attr_accessor :start_date

    attr_accessor :end_date

    attr_accessor :internal_note

    attr_accessor :is_active

    attr_accessor :created_on

    attr_accessor :modified_on

    attr_accessor :created_by

    attr_accessor :modified_by

    attr_accessor :type

    attr_accessor :code

    attr_accessor :salary_type

    attr_accessor :social_security_number

    attr_accessor :employer_social_security_rate

    attr_accessor :employee_social_security_rate

    attr_accessor :email

    attr_accessor :dob

    attr_accessor :address

    attr_accessor :contact_name

    attr_accessor :contact_number

    attr_accessor :contact_relationship

    attr_accessor :office

    attr_accessor :social_security_status

    attr_accessor :method_payment

    attr_accessor :secondary_email

    attr_accessor :is_delete

    attr_accessor :social_security_value

    attr_accessor :withholding_tax

    attr_accessor :is_head_office

    attr_accessor :company_branch

    attr_accessor :marital_status

    attr_accessor :current_address

    attr_accessor :department_id

    attr_accessor :first_name_foreign

    attr_accessor :last_name_foreign

    attr_accessor :is_social_security_registered

    attr_accessor :bank_branch_code

    attr_accessor :id_card

    attr_accessor :household_registration

    attr_accessor :nickname

    attr_accessor :nickname_foreign

    attr_accessor :line_id

    attr_accessor :conditions_withholding_tax

    attr_accessor :paid_period

    attr_accessor :bank

    attr_accessor :company

    attr_accessor :gallery

    attr_accessor :gallery_id_card

    attr_accessor :gallery_household_registration

    attr_accessor :payroll_detail

    attr_accessor :department

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'id' => :'id',
        :'company_id' => :'companyId',
        :'prefix' => :'prefix',
        :'first_name' => :'firstName',
        :'last_name' => :'lastName',
        :'salary' => :'salary',
        :'identitfication_number' => :'identitficationNumber',
        :'passport_number' => :'passportNumber',
        :'profile_image' => :'profileImage',
        :'mobile' => :'mobile',
        :'commission' => :'commission',
        :'remarks' => :'remarks',
        :'title' => :'title',
        :'gallery_id' => :'galleryId',
        :'bank_id' => :'bankId',
        :'branch' => :'branch',
        :'account_number' => :'accountNumber',
        :'account_type' => :'accountType',
        :'start_date' => :'startDate',
        :'end_date' => :'endDate',
        :'internal_note' => :'internalNote',
        :'is_active' => :'isActive',
        :'created_on' => :'createdOn',
        :'modified_on' => :'modifiedOn',
        :'created_by' => :'createdBy',
        :'modified_by' => :'modifiedBy',
        :'type' => :'type',
        :'code' => :'code',
        :'salary_type' => :'salaryType',
        :'social_security_number' => :'socialSecurityNumber',
        :'employer_social_security_rate' => :'employerSocialSecurityRate',
        :'employee_social_security_rate' => :'employeeSocialSecurityRate',
        :'email' => :'email',
        :'dob' => :'dob',
        :'address' => :'address',
        :'contact_name' => :'contactName',
        :'contact_number' => :'contactNumber',
        :'contact_relationship' => :'contactRelationship',
        :'office' => :'office',
        :'social_security_status' => :'socialSecurityStatus',
        :'method_payment' => :'methodPayment',
        :'secondary_email' => :'secondaryEmail',
        :'is_delete' => :'isDelete',
        :'social_security_value' => :'socialSecurityValue',
        :'withholding_tax' => :'withholdingTax',
        :'is_head_office' => :'isHeadOffice',
        :'company_branch' => :'companyBranch',
        :'marital_status' => :'maritalStatus',
        :'current_address' => :'currentAddress',
        :'department_id' => :'departmentId',
        :'first_name_foreign' => :'firstNameForeign',
        :'last_name_foreign' => :'lastNameForeign',
        :'is_social_security_registered' => :'isSocialSecurityRegistered',
        :'bank_branch_code' => :'bankBranchCode',
        :'id_card' => :'idCard',
        :'household_registration' => :'householdRegistration',
        :'nickname' => :'nickname',
        :'nickname_foreign' => :'nicknameForeign',
        :'line_id' => :'lineId',
        :'conditions_withholding_tax' => :'conditionsWithholdingTax',
        :'paid_period' => :'paidPeriod',
        :'bank' => :'bank',
        :'company' => :'company',
        :'gallery' => :'gallery',
        :'gallery_id_card' => :'galleryIdCard',
        :'gallery_household_registration' => :'galleryHouseholdRegistration',
        :'payroll_detail' => :'payrollDetail',
        :'department' => :'department'
      }
    end

    # Returns all the JSON keys this model knows about
    def self.acceptable_attributes
      attribute_map.values
    end

    # Attribute type mapping.
    def self.openapi_types
      {
        :'id' => :'Integer',
        :'company_id' => :'Integer',
        :'prefix' => :'GenderPrefix',
        :'first_name' => :'String',
        :'last_name' => :'String',
        :'salary' => :'Float',
        :'identitfication_number' => :'String',
        :'passport_number' => :'String',
        :'profile_image' => :'String',
        :'mobile' => :'String',
        :'commission' => :'Float',
        :'remarks' => :'String',
        :'title' => :'String',
        :'gallery_id' => :'Integer',
        :'bank_id' => :'Integer',
        :'branch' => :'String',
        :'account_number' => :'String',
        :'account_type' => :'Integer',
        :'start_date' => :'Time',
        :'end_date' => :'Time',
        :'internal_note' => :'String',
        :'is_active' => :'Boolean',
        :'created_on' => :'Time',
        :'modified_on' => :'Time',
        :'created_by' => :'Integer',
        :'modified_by' => :'Integer',
        :'type' => :'OneOfEmployeeTypes',
        :'code' => :'String',
        :'salary_type' => :'Integer',
        :'social_security_number' => :'String',
        :'employer_social_security_rate' => :'Integer',
        :'employee_social_security_rate' => :'Integer',
        :'email' => :'String',
        :'dob' => :'Time',
        :'address' => :'String',
        :'contact_name' => :'String',
        :'contact_number' => :'String',
        :'contact_relationship' => :'String',
        :'office' => :'String',
        :'social_security_status' => :'Integer',
        :'method_payment' => :'Integer',
        :'secondary_email' => :'String',
        :'is_delete' => :'Boolean',
        :'social_security_value' => :'Float',
        :'withholding_tax' => :'Float',
        :'is_head_office' => :'Boolean',
        :'company_branch' => :'String',
        :'marital_status' => :'Integer',
        :'current_address' => :'String',
        :'department_id' => :'Integer',
        :'first_name_foreign' => :'String',
        :'last_name_foreign' => :'String',
        :'is_social_security_registered' => :'Boolean',
        :'bank_branch_code' => :'String',
        :'id_card' => :'Integer',
        :'household_registration' => :'Integer',
        :'nickname' => :'String',
        :'nickname_foreign' => :'String',
        :'line_id' => :'String',
        :'conditions_withholding_tax' => :'OneOfConditionsOfWithholdingTax',
        :'paid_period' => :'OneOfPaidPeriod',
        :'bank' => :'OneOfBank',
        :'company' => :'OneOfCompany',
        :'gallery' => :'OneOfGallery',
        :'gallery_id_card' => :'OneOfGallery',
        :'gallery_household_registration' => :'OneOfGallery',
        :'payroll_detail' => :'Array<PayrollDetail>',
        :'department' => :'OneOfDepartment'
      }
    end

    # List of attributes with nullable: true
    def self.openapi_nullable
      Set.new([
        :'company_id',
        :'first_name',
        :'last_name',
        :'identitfication_number',
        :'passport_number',
        :'profile_image',
        :'mobile',
        :'commission',
        :'remarks',
        :'title',
        :'gallery_id',
        :'bank_id',
        :'branch',
        :'account_number',
        :'account_type',
        :'start_date',
        :'end_date',
        :'internal_note',
        :'is_active',
        :'created_on',
        :'modified_on',
        :'created_by',
        :'modified_by',
        :'type',
        :'code',
        :'social_security_number',
        :'email',
        :'dob',
        :'address',
        :'contact_name',
        :'contact_number',
        :'contact_relationship',
        :'office',
        :'social_security_status',
        :'method_payment',
        :'secondary_email',
        :'company_branch',
        :'current_address',
        :'department_id',
        :'first_name_foreign',
        :'last_name_foreign',
        :'bank_branch_code',
        :'id_card',
        :'household_registration',
        :'nickname',
        :'nickname_foreign',
        :'line_id',
        :'conditions_withholding_tax',
        :'paid_period',
        :'bank',
        :'company',
        :'gallery',
        :'gallery_id_card',
        :'gallery_household_registration',
        :'payroll_detail',
        :'department'
      ])
    end

    # Initializes the object
    # @param [Hash] attributes Model attributes in the form of hash
    def initialize(attributes = {})
      if (!attributes.is_a?(Hash))
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::Employee` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::Employee`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'id')
        self.id = attributes[:'id']
      end

      if attributes.key?(:'company_id')
        self.company_id = attributes[:'company_id']
      end

      if attributes.key?(:'prefix')
        self.prefix = attributes[:'prefix']
      end

      if attributes.key?(:'first_name')
        self.first_name = attributes[:'first_name']
      end

      if attributes.key?(:'last_name')
        self.last_name = attributes[:'last_name']
      end

      if attributes.key?(:'salary')
        self.salary = attributes[:'salary']
      end

      if attributes.key?(:'identitfication_number')
        self.identitfication_number = attributes[:'identitfication_number']
      end

      if attributes.key?(:'passport_number')
        self.passport_number = attributes[:'passport_number']
      end

      if attributes.key?(:'profile_image')
        self.profile_image = attributes[:'profile_image']
      end

      if attributes.key?(:'mobile')
        self.mobile = attributes[:'mobile']
      end

      if attributes.key?(:'commission')
        self.commission = attributes[:'commission']
      end

      if attributes.key?(:'remarks')
        self.remarks = attributes[:'remarks']
      end

      if attributes.key?(:'title')
        self.title = attributes[:'title']
      end

      if attributes.key?(:'gallery_id')
        self.gallery_id = attributes[:'gallery_id']
      end

      if attributes.key?(:'bank_id')
        self.bank_id = attributes[:'bank_id']
      end

      if attributes.key?(:'branch')
        self.branch = attributes[:'branch']
      end

      if attributes.key?(:'account_number')
        self.account_number = attributes[:'account_number']
      end

      if attributes.key?(:'account_type')
        self.account_type = attributes[:'account_type']
      end

      if attributes.key?(:'start_date')
        self.start_date = attributes[:'start_date']
      end

      if attributes.key?(:'end_date')
        self.end_date = attributes[:'end_date']
      end

      if attributes.key?(:'internal_note')
        self.internal_note = attributes[:'internal_note']
      end

      if attributes.key?(:'is_active')
        self.is_active = attributes[:'is_active']
      end

      if attributes.key?(:'created_on')
        self.created_on = attributes[:'created_on']
      end

      if attributes.key?(:'modified_on')
        self.modified_on = attributes[:'modified_on']
      end

      if attributes.key?(:'created_by')
        self.created_by = attributes[:'created_by']
      end

      if attributes.key?(:'modified_by')
        self.modified_by = attributes[:'modified_by']
      end

      if attributes.key?(:'type')
        self.type = attributes[:'type']
      end

      if attributes.key?(:'code')
        self.code = attributes[:'code']
      end

      if attributes.key?(:'salary_type')
        self.salary_type = attributes[:'salary_type']
      end

      if attributes.key?(:'social_security_number')
        self.social_security_number = attributes[:'social_security_number']
      end

      if attributes.key?(:'employer_social_security_rate')
        self.employer_social_security_rate = attributes[:'employer_social_security_rate']
      end

      if attributes.key?(:'employee_social_security_rate')
        self.employee_social_security_rate = attributes[:'employee_social_security_rate']
      end

      if attributes.key?(:'email')
        self.email = attributes[:'email']
      end

      if attributes.key?(:'dob')
        self.dob = attributes[:'dob']
      end

      if attributes.key?(:'address')
        self.address = attributes[:'address']
      end

      if attributes.key?(:'contact_name')
        self.contact_name = attributes[:'contact_name']
      end

      if attributes.key?(:'contact_number')
        self.contact_number = attributes[:'contact_number']
      end

      if attributes.key?(:'contact_relationship')
        self.contact_relationship = attributes[:'contact_relationship']
      end

      if attributes.key?(:'office')
        self.office = attributes[:'office']
      end

      if attributes.key?(:'social_security_status')
        self.social_security_status = attributes[:'social_security_status']
      end

      if attributes.key?(:'method_payment')
        self.method_payment = attributes[:'method_payment']
      end

      if attributes.key?(:'secondary_email')
        self.secondary_email = attributes[:'secondary_email']
      end

      if attributes.key?(:'is_delete')
        self.is_delete = attributes[:'is_delete']
      end

      if attributes.key?(:'social_security_value')
        self.social_security_value = attributes[:'social_security_value']
      end

      if attributes.key?(:'withholding_tax')
        self.withholding_tax = attributes[:'withholding_tax']
      end

      if attributes.key?(:'is_head_office')
        self.is_head_office = attributes[:'is_head_office']
      end

      if attributes.key?(:'company_branch')
        self.company_branch = attributes[:'company_branch']
      end

      if attributes.key?(:'marital_status')
        self.marital_status = attributes[:'marital_status']
      end

      if attributes.key?(:'current_address')
        self.current_address = attributes[:'current_address']
      end

      if attributes.key?(:'department_id')
        self.department_id = attributes[:'department_id']
      end

      if attributes.key?(:'first_name_foreign')
        self.first_name_foreign = attributes[:'first_name_foreign']
      end

      if attributes.key?(:'last_name_foreign')
        self.last_name_foreign = attributes[:'last_name_foreign']
      end

      if attributes.key?(:'is_social_security_registered')
        self.is_social_security_registered = attributes[:'is_social_security_registered']
      end

      if attributes.key?(:'bank_branch_code')
        self.bank_branch_code = attributes[:'bank_branch_code']
      end

      if attributes.key?(:'id_card')
        self.id_card = attributes[:'id_card']
      end

      if attributes.key?(:'household_registration')
        self.household_registration = attributes[:'household_registration']
      end

      if attributes.key?(:'nickname')
        self.nickname = attributes[:'nickname']
      end

      if attributes.key?(:'nickname_foreign')
        self.nickname_foreign = attributes[:'nickname_foreign']
      end

      if attributes.key?(:'line_id')
        self.line_id = attributes[:'line_id']
      end

      if attributes.key?(:'conditions_withholding_tax')
        self.conditions_withholding_tax = attributes[:'conditions_withholding_tax']
      end

      if attributes.key?(:'paid_period')
        self.paid_period = attributes[:'paid_period']
      end

      if attributes.key?(:'bank')
        self.bank = attributes[:'bank']
      end

      if attributes.key?(:'company')
        self.company = attributes[:'company']
      end

      if attributes.key?(:'gallery')
        self.gallery = attributes[:'gallery']
      end

      if attributes.key?(:'gallery_id_card')
        self.gallery_id_card = attributes[:'gallery_id_card']
      end

      if attributes.key?(:'gallery_household_registration')
        self.gallery_household_registration = attributes[:'gallery_household_registration']
      end

      if attributes.key?(:'payroll_detail')
        if (value = attributes[:'payroll_detail']).is_a?(Array)
          self.payroll_detail = value
        end
      end

      if attributes.key?(:'department')
        self.department = attributes[:'department']
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      true
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          id == o.id &&
          company_id == o.company_id &&
          prefix == o.prefix &&
          first_name == o.first_name &&
          last_name == o.last_name &&
          salary == o.salary &&
          identitfication_number == o.identitfication_number &&
          passport_number == o.passport_number &&
          profile_image == o.profile_image &&
          mobile == o.mobile &&
          commission == o.commission &&
          remarks == o.remarks &&
          title == o.title &&
          gallery_id == o.gallery_id &&
          bank_id == o.bank_id &&
          branch == o.branch &&
          account_number == o.account_number &&
          account_type == o.account_type &&
          start_date == o.start_date &&
          end_date == o.end_date &&
          internal_note == o.internal_note &&
          is_active == o.is_active &&
          created_on == o.created_on &&
          modified_on == o.modified_on &&
          created_by == o.created_by &&
          modified_by == o.modified_by &&
          type == o.type &&
          code == o.code &&
          salary_type == o.salary_type &&
          social_security_number == o.social_security_number &&
          employer_social_security_rate == o.employer_social_security_rate &&
          employee_social_security_rate == o.employee_social_security_rate &&
          email == o.email &&
          dob == o.dob &&
          address == o.address &&
          contact_name == o.contact_name &&
          contact_number == o.contact_number &&
          contact_relationship == o.contact_relationship &&
          office == o.office &&
          social_security_status == o.social_security_status &&
          method_payment == o.method_payment &&
          secondary_email == o.secondary_email &&
          is_delete == o.is_delete &&
          social_security_value == o.social_security_value &&
          withholding_tax == o.withholding_tax &&
          is_head_office == o.is_head_office &&
          company_branch == o.company_branch &&
          marital_status == o.marital_status &&
          current_address == o.current_address &&
          department_id == o.department_id &&
          first_name_foreign == o.first_name_foreign &&
          last_name_foreign == o.last_name_foreign &&
          is_social_security_registered == o.is_social_security_registered &&
          bank_branch_code == o.bank_branch_code &&
          id_card == o.id_card &&
          household_registration == o.household_registration &&
          nickname == o.nickname &&
          nickname_foreign == o.nickname_foreign &&
          line_id == o.line_id &&
          conditions_withholding_tax == o.conditions_withholding_tax &&
          paid_period == o.paid_period &&
          bank == o.bank &&
          company == o.company &&
          gallery == o.gallery &&
          gallery_id_card == o.gallery_id_card &&
          gallery_household_registration == o.gallery_household_registration &&
          payroll_detail == o.payroll_detail &&
          department == o.department
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [id, company_id, prefix, first_name, last_name, salary, identitfication_number, passport_number, profile_image, mobile, commission, remarks, title, gallery_id, bank_id, branch, account_number, account_type, start_date, end_date, internal_note, is_active, created_on, modified_on, created_by, modified_by, type, code, salary_type, social_security_number, employer_social_security_rate, employee_social_security_rate, email, dob, address, contact_name, contact_number, contact_relationship, office, social_security_status, method_payment, secondary_email, is_delete, social_security_value, withholding_tax, is_head_office, company_branch, marital_status, current_address, department_id, first_name_foreign, last_name_foreign, is_social_security_registered, bank_branch_code, id_card, household_registration, nickname, nickname_foreign, line_id, conditions_withholding_tax, paid_period, bank, company, gallery, gallery_id_card, gallery_household_registration, payroll_detail, department].hash
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def self.build_from_hash(attributes)
      new.build_from_hash(attributes)
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def build_from_hash(attributes)
      return nil unless attributes.is_a?(Hash)
      self.class.openapi_types.each_pair do |key, type|
        if attributes[self.class.attribute_map[key]].nil? && self.class.openapi_nullable.include?(key)
          self.send("#{key}=", nil)
        elsif type =~ /\AArray<(.*)>/i
          # check to ensure the input is an array given that the attribute
          # is documented as an array but the input is not
          if attributes[self.class.attribute_map[key]].is_a?(Array)
            self.send("#{key}=", attributes[self.class.attribute_map[key]].map { |v| _deserialize($1, v) })
          end
        elsif !attributes[self.class.attribute_map[key]].nil?
          self.send("#{key}=", _deserialize(type, attributes[self.class.attribute_map[key]]))
        end
      end

      self
    end

    # Deserializes the data based on type
    # @param string type Data type
    # @param string value Value to be deserialized
    # @return [Object] Deserialized data
    def _deserialize(type, value)
      case type.to_sym
      when :Time
        Time.parse(value)
      when :Date
        Date.parse(value)
      when :String
        value.to_s
      when :Integer
        value.to_i
      when :Float
        value.to_f
      when :Boolean
        if value.to_s =~ /\A(true|t|yes|y|1)\z/i
          true
        else
          false
        end
      when :Object
        # generic object (usually a Hash), return directly
        value
      when /\AArray<(?<inner_type>.+)>\z/
        inner_type = Regexp.last_match[:inner_type]
        value.map { |v| _deserialize(inner_type, v) }
      when /\AHash<(?<k_type>.+?), (?<v_type>.+)>\z/
        k_type = Regexp.last_match[:k_type]
        v_type = Regexp.last_match[:v_type]
        {}.tap do |hash|
          value.each do |k, v|
            hash[_deserialize(k_type, k)] = _deserialize(v_type, v)
          end
        end
      else # model
        # models (e.g. Pet) or oneOf
        klass = OpenapiClient.const_get(type)
        klass.respond_to?(:openapi_one_of) ? klass.build(value) : klass.build_from_hash(value)
      end
    end

    # Returns the string representation of the object
    # @return [String] String presentation of the object
    def to_s
      to_hash.to_s
    end

    # to_body is an alias to to_hash (backward compatibility)
    # @return [Hash] Returns the object in the form of hash
    def to_body
      to_hash
    end

    # Returns the object in the form of hash
    # @return [Hash] Returns the object in the form of hash
    def to_hash
      hash = {}
      self.class.attribute_map.each_pair do |attr, param|
        value = self.send(attr)
        if value.nil?
          is_nullable = self.class.openapi_nullable.include?(attr)
          next if !is_nullable || (is_nullable && !instance_variable_defined?(:"@#{attr}"))
        end

        hash[param] = _to_hash(value)
      end
      hash
    end

    # Outputs non-array value in the form of hash
    # For object, use to_hash. Otherwise, just return the value
    # @param [Object] value Any valid value
    # @return [Hash] Returns the value in the form of hash
    def _to_hash(value)
      if value.is_a?(Array)
        value.compact.map { |v| _to_hash(v) }
      elsif value.is_a?(Hash)
        {}.tap do |hash|
          value.each { |k, v| hash[k] = _to_hash(v) }
        end
      elsif value.respond_to? :to_hash
        value.to_hash
      else
        value
      end
    end

  end

end