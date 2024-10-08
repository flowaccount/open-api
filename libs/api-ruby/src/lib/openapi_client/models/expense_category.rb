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
  class ExpenseCategory
    attr_accessor :id

    attr_accessor :name

    attr_accessor :name_foreign

    attr_accessor :is_share

    attr_accessor :is_delete

    attr_accessor :is_gl_system

    attr_accessor :system_code

    attr_accessor :reset_transaction_id

    attr_accessor :tax_life

    attr_accessor :chart_of_account_id

    attr_accessor :chart_of_account_id_credit

    attr_accessor :depreciation_chart_of_account_id

    attr_accessor :accumulated_depreciation_chart_of_account_id

    attr_accessor :depreciable_asset

    attr_accessor :expense_list

    attr_accessor :company_expense_category

    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'id' => :'id',
        :'name' => :'name',
        :'name_foreign' => :'nameForeign',
        :'is_share' => :'isShare',
        :'is_delete' => :'isDelete',
        :'is_gl_system' => :'isGLSystem',
        :'system_code' => :'systemCode',
        :'reset_transaction_id' => :'resetTransactionId',
        :'tax_life' => :'taxLife',
        :'chart_of_account_id' => :'chartOfAccountId',
        :'chart_of_account_id_credit' => :'chartOfAccountIdCredit',
        :'depreciation_chart_of_account_id' => :'depreciationChartOfAccountId',
        :'accumulated_depreciation_chart_of_account_id' => :'accumulatedDepreciationChartOfAccountId',
        :'depreciable_asset' => :'depreciableAsset',
        :'expense_list' => :'expenseList',
        :'company_expense_category' => :'companyExpenseCategory'
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
        :'name' => :'String',
        :'name_foreign' => :'String',
        :'is_share' => :'Boolean',
        :'is_delete' => :'Boolean',
        :'is_gl_system' => :'Boolean',
        :'system_code' => :'Integer',
        :'reset_transaction_id' => :'Integer',
        :'tax_life' => :'Integer',
        :'chart_of_account_id' => :'Integer',
        :'chart_of_account_id_credit' => :'Integer',
        :'depreciation_chart_of_account_id' => :'Integer',
        :'accumulated_depreciation_chart_of_account_id' => :'Integer',
        :'depreciable_asset' => :'Boolean',
        :'expense_list' => :'Array<ExpenseList>',
        :'company_expense_category' => :'Array<CompanyExpenseCategory>'
      }
    end

    # List of attributes with nullable: true
    def self.openapi_nullable
      Set.new([
        :'name_foreign',
        :'system_code',
        :'reset_transaction_id',
        :'tax_life',
        :'chart_of_account_id',
        :'chart_of_account_id_credit',
        :'depreciation_chart_of_account_id',
        :'accumulated_depreciation_chart_of_account_id',
        :'depreciable_asset',
        :'expense_list',
        :'company_expense_category'
      ])
    end

    # Initializes the object
    # @param [Hash] attributes Model attributes in the form of hash
    def initialize(attributes = {})
      if (!attributes.is_a?(Hash))
        fail ArgumentError, "The input argument (attributes) must be a hash in `OpenapiClient::ExpenseCategory` initialize method"
      end

      # check to see if the attribute exists and convert string to symbol for hash key
      attributes = attributes.each_with_object({}) { |(k, v), h|
        if (!self.class.attribute_map.key?(k.to_sym))
          fail ArgumentError, "`#{k}` is not a valid attribute in `OpenapiClient::ExpenseCategory`. Please check the name to make sure it's valid. List of attributes: " + self.class.attribute_map.keys.inspect
        end
        h[k.to_sym] = v
      }

      if attributes.key?(:'id')
        self.id = attributes[:'id']
      end

      if attributes.key?(:'name')
        self.name = attributes[:'name']
      end

      if attributes.key?(:'name_foreign')
        self.name_foreign = attributes[:'name_foreign']
      end

      if attributes.key?(:'is_share')
        self.is_share = attributes[:'is_share']
      end

      if attributes.key?(:'is_delete')
        self.is_delete = attributes[:'is_delete']
      end

      if attributes.key?(:'is_gl_system')
        self.is_gl_system = attributes[:'is_gl_system']
      end

      if attributes.key?(:'system_code')
        self.system_code = attributes[:'system_code']
      end

      if attributes.key?(:'reset_transaction_id')
        self.reset_transaction_id = attributes[:'reset_transaction_id']
      end

      if attributes.key?(:'tax_life')
        self.tax_life = attributes[:'tax_life']
      end

      if attributes.key?(:'chart_of_account_id')
        self.chart_of_account_id = attributes[:'chart_of_account_id']
      end

      if attributes.key?(:'chart_of_account_id_credit')
        self.chart_of_account_id_credit = attributes[:'chart_of_account_id_credit']
      end

      if attributes.key?(:'depreciation_chart_of_account_id')
        self.depreciation_chart_of_account_id = attributes[:'depreciation_chart_of_account_id']
      end

      if attributes.key?(:'accumulated_depreciation_chart_of_account_id')
        self.accumulated_depreciation_chart_of_account_id = attributes[:'accumulated_depreciation_chart_of_account_id']
      end

      if attributes.key?(:'depreciable_asset')
        self.depreciable_asset = attributes[:'depreciable_asset']
      end

      if attributes.key?(:'expense_list')
        if (value = attributes[:'expense_list']).is_a?(Array)
          self.expense_list = value
        end
      end

      if attributes.key?(:'company_expense_category')
        if (value = attributes[:'company_expense_category']).is_a?(Array)
          self.company_expense_category = value
        end
      end
    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if @name.nil?
        invalid_properties.push('invalid value for "name", name cannot be nil.')
      end

      if @name.to_s.length > 255
        invalid_properties.push('invalid value for "name", the character length must be smaller than or equal to 255.')
      end

      if @name.to_s.length < 0
        invalid_properties.push('invalid value for "name", the character length must be great than or equal to 0.')
      end

      invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if @name.nil?
      return false if @name.to_s.length > 255
      return false if @name.to_s.length < 0
      true
    end

    # Custom attribute writer method with validation
    # @param [Object] name Value to be assigned
    def name=(name)
      if name.nil?
        fail ArgumentError, 'name cannot be nil'
      end

      if name.to_s.length > 255
        fail ArgumentError, 'invalid value for "name", the character length must be smaller than or equal to 255.'
      end

      if name.to_s.length < 0
        fail ArgumentError, 'invalid value for "name", the character length must be great than or equal to 0.'
      end

      @name = name
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          id == o.id &&
          name == o.name &&
          name_foreign == o.name_foreign &&
          is_share == o.is_share &&
          is_delete == o.is_delete &&
          is_gl_system == o.is_gl_system &&
          system_code == o.system_code &&
          reset_transaction_id == o.reset_transaction_id &&
          tax_life == o.tax_life &&
          chart_of_account_id == o.chart_of_account_id &&
          chart_of_account_id_credit == o.chart_of_account_id_credit &&
          depreciation_chart_of_account_id == o.depreciation_chart_of_account_id &&
          accumulated_depreciation_chart_of_account_id == o.accumulated_depreciation_chart_of_account_id &&
          depreciable_asset == o.depreciable_asset &&
          expense_list == o.expense_list &&
          company_expense_category == o.company_expense_category
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Integer] Hash code
    def hash
      [id, name, name_foreign, is_share, is_delete, is_gl_system, system_code, reset_transaction_id, tax_life, chart_of_account_id, chart_of_account_id_credit, depreciation_chart_of_account_id, accumulated_depreciation_chart_of_account_id, depreciable_asset, expense_list, company_expense_category].hash
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
